<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->group(function () {
    Route::get('/','index')->name('login');
    Route::post('/','processLogin')->name('login-proccess');
    Route::get('register','registration')->name('register');
    Route::get('scan','scanner')->name('scan');
    Route::post('register','processRegistration');
    Route::post('logout','logout')->name('logout')->middleware('auth');
    Route::get('logout_n', [DashboardController::class, 'unsubscribeFCMTopic']);
});