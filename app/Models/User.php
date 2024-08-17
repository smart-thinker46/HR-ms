<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'join_date',
        'experience',
        'last_login',
        'phone_number',
        'location',
        'status',
        'role_name',
        'email',
        'role_name',
        'avatar',
        'position',
        'designation',
        'department',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /** auto generate id */
    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $lastUser = self::orderBy('user_id', 'desc')->first();
            $nextID  = $lastUser ? intval(substr($lastUser->user_id, 4)) + 1 : 1;
            do {
                $model->user_id = 'KH_' . sprintf("%04s", $nextID++);
            } while (self::where('user_id', $model->user_id)->exists());
        });
    }

}
