<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $guarded =
        [
            'id',
            'created_at',
            'updated_at'
        ];

    protected $fillable =
        [
            'first_name',
            'last_name',
            'email',
            'mobile',
            'avatar_id',
            'role',
            'password',
            'remember_token'
        ];

    protected $hidden =
        [
            'password',
            'remember_token'
        ];

    const ADMIN = 'admin';
    const USER = 'user';
    static array $roles =
        [
            self::ADMIN,
            self::USER
        ];

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function avatar(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'avatar_id')->withDefault();
    }

    public function getProfileAttribute(): string
    {
        return empty($this->avatar->files)
            ? asset('assets/common/images/profile.png')
            : '/uploads/' . $this->avatar->files['original'];
    }
}
