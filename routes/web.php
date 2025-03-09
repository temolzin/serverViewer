<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServerDetailController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/serverDetail', [ServerDetailController::class, 'index']);
Route::get('/serverDetail/getData', [ServerDetailController::class, 'getData'])->name('serverDetail.getData');