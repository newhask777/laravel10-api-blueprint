<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Pub\Auth\Controllers\AuthController;

Route::group(['prefix' => 'admin',  'middleware' => []], function(){
    Route::get('/', [AuthController::class, 'index'])->name('auths.index');
    Route::get('/create', [AuthController::class, 'create'])->name('auths.create');
    Route::post('/', [AuthController::class, 'store'])->name('auths.store');
    Route::get('/{auth}', [AuthController::class, 'show'])->name('auths.read');
    Route::get('/edit/{auth}', [AuthController::class, 'edit'])->name('auths.edit');
    Route::put('/{auth}', [AuthController::class, 'update'])->name('auths.update');
    Route::delete('/{auth}', [AuthController::class, 'destroy'])->name('auths.delete');
});
