<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BotUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BotUserAdminController extends Controller
{
    public function index()
    {
        $users = BotUser::paginate();

        return view('admin.bot_users', compact('users'));
    }

    public function updateBalance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user' => ['required', 'exists:bot_users,id'],
            'balance' => ['required', 'numeric', 'between:-10000,10000'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $userId = $request->input('user');
            $amount = $request->input('balance');

            // Обновление поля balance пользователя
            $user = BotUser::findOrFail($userId);
            $newBalance = $user->balance + $amount;

            if ($newBalance < 0) {
                throw ValidationException::withMessages([
                    'balance' => 'Изменение баланса приведет к отрицательному значению.',
                ])->redirectTo(route('admin.bot_users'));
            }
            $user->balance = $newBalance;
            $user->save();

            return redirect()->route('admin.bot_users')->with('success', 'Balance пользователя успешно обновлен.');
        } catch (QueryException $e) {
            // Обработка ошибки запроса
            $errorCode = $e->getCode();
            $errorMessage = $e->getMessage();

            // Дополнительная логика обработки ошибки

            // Пример вывода сообщения об ошибке
            return back()->withError('Произошла ошибка при сохранении данных: ' . $errorMessage);
        } catch (\Exception $e) {
            // Общая обработка других исключений
            // ...

            // Пример вывода сообщения об ошибке
            return back()->withError('Произошла ошибка: ' . $e->getMessage());
        }
    }
    public function updateProcessing(Request $request)
    {
        try {
            $userId = $request->input('user');

            // Обновление поля balance пользователя
            $user = BotUser::findOrFail($userId);
            $user->processing = 0;
            $user->save();

            return redirect()->route('admin.bot_users')->with('success', 'Processing пользователя успешно сброшен.');
        } catch (QueryException $e) {
            // Обработка ошибки запроса
            $errorCode = $e->getCode();
            $errorMessage = $e->getMessage();

            // Дополнительная логика обработки ошибки

            // Пример вывода сообщения об ошибке
            return back()->withError('Произошла ошибка при сохранении данных: ' . $errorMessage);
        } catch (\Exception $e) {
            // Общая обработка других исключений
            // ...

            // Пример вывода сообщения об ошибке
            return back()->withError('Произошла ошибка: ' . $e->getMessage());
        }
    }

}
