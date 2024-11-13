<?php
namespace App\Models;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager; // Добавлено это

Route::get('/', function () {
   return view('about');
});

#Route::get('/', action: 'UserController@about');
Route::get('/about', action: 'UserController@about');
Route::get('/register', action: 'UserConrtoller@register');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('register_for_first_lesson', [ProfileController::class, 'registerForFirstLesson'])->name('register_for_first_lesson');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes(); // Теперь это должно работать
});
