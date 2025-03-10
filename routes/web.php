<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);


Route::group(['middleware' => ['auth']], function () {

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::resource('users', UserController::class);

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

});
