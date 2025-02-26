<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Pub\Auth\Controllers\Api\LoginController;

//Route::group(['prefix' => 'auths',  'middleware' => []], function(){
//    Route::post('login', [LoginController::class, 'login'])->name('api.auths.login');
//});

Route::group(['prefix' => 'auth', 'middleware' => []], function () {
    Route::post('/login',  [LoginController::class, 'login'])->name('api.auths.login');
});

