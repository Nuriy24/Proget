<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ResetVoyagerPassword extends Migration
{
    public function up()
    {
        DB::table('users')
            ->where('email', 'admin@admin.com') // Замените на Ваш email
            ->update(['password' => bcrypt('1234567890')]); // Замените 'новый_пароль' на Ваш новый пароль
    }

    public function down()
    {
        // Здесь можно добавить код для отката миграции, если это необходимо
    }
}