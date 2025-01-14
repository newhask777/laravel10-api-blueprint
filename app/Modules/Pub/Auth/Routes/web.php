<?php

use App\Modules\Pub\Auth\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'auths',  'middleware' => []], function(){
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.post');
});

