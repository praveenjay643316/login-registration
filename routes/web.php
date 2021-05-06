<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/auth/save',[AuthenticationController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[AuthenticationController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[AuthenticationController::class, 'logout'])->name('auth.logout');




Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[AuthenticationController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[AuthenticationController::class, 'register'])->name('auth.register');
    Route::get('/admin/dashboard',[AuthenticationController::class, 'dashboard']);
    Route::get('/admin/profile',[AuthenticationController::class,'profile']);
});
