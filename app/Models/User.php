<?php

namespace App\Models;

use TCG\Voyager\Models\User as VoyagerUser; // Расширяем класс User из Voyager
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends VoyagerUser
{
    use HasFactory, Notifiable;

    // Добавляем поле role_id в fillable
    protected $fillable = [
        'name', 'email', 'password', 'role_id', // Добавляем 'role_id'
    ];

    // Массив скрытых атрибутов
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Касты для даты
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
