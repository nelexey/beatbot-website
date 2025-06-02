<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App\Models
 *
 * @property $id
 * @property $name
 * @property $role
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @property $isAdmin
 */
class User extends Authenticatable implements MustVerifyEmail
{
    public const ROLE_USER = 'user';

    public const ROLE_ADMIN = 'admin';

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'role',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getIsAdminAttribute(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'user_id');
    }
}
