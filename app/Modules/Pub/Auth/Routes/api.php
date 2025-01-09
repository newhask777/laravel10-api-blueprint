<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Pub\Auth\Controllers\AuthController;

Route::group(['prefix' => 'admin',  'middleware' => []], function(){
    Route::get('/', [AuthController::class, 'index'])->name('api.auths.index');
    Route::post('/', [AuthController::class, 'store'])->name('api.auths.store');
    Route::get('/{auth}', [AuthController::class, 'show'])->name('api.auths.read');
    Route::put('/{auth}', [AuthController::class, 'update'])->name('api.auths.update');
    Route::delete('/{auth}', [AuthController::class, 'destroy'])->name('api.auths.delete');
});
