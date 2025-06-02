<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SocialEmailRequest;
use App\Models\SocialUser;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Contracts\User as SocialiteUser;

class SocialController extends Controller
{
    public function authVkontakte()
    {
        /** @var SocialiteUser $user */
        $socialiteUser = Socialite::driver('vkontakte')->user();
        $socialUser = $this->getUserBySocialite($socialiteUser, SocialUser::TYPE_VKONTAKTE);

        if ($socialUser && $socialUser->user) {
            return $this->loginBySocialUser($socialUser);
        }

        if (!$socialiteUser->getEmail()) {
            return view('auth.social-email', ['token' => $socialiteUser->token]);
        }

        return $this->registerBySocialiteUser($socialiteUser, SocialUser::TYPE_VKONTAKTE);
    }

    public function fillVkEmail(SocialEmailRequest $request)
    {
        $token = $request->input('token');
        $email = $request->input('email');

        $socialiteUser = Socialite::driver('vkontakte')->userFromToken($token);
        $socialiteUser->email = $email;

        return $this->registerBySocialiteUser($socialiteUser, SocialUser::TYPE_VKONTAKTE);
    }

    private function getUserBySocialite(SocialiteUser $user, $type): ?SocialUser
    {
        return SocialUser
            ::where('type', $type)
            ->where('type_id', $user->getId())
            ->first();
    }

    private function registerBySocialiteUser(SocialiteUser $socialiteUser, $type)
    {
        $password = Str::random(10);
        $user = User::create([
            'name' => $socialiteUser->getName(),
            'email' => $socialiteUser->getEmail(),
            'password' => Hash::make($password),
            'avatar' => $socialiteUser->getAvatar(),
        ]);

        //todo send password to email

        event(new Registered($user));

        $socialUser = SocialUser::create([
            'user_id' => $user->id,
            'type' => $type,
            'type_id' => $socialiteUser->getId(),
            'token' => $socialiteUser->token,
            'data' => $socialiteUser,
        ]);

        return $this->loginBySocialUser($socialUser);
    }

    private function loginBySocialUser(SocialUser $socialUser)
    {
        Auth::login($socialUser->user, $remember = true);
        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
