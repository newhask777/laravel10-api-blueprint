<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Menu\Controllers\Api\MenuController;

Route::group(['prefix' => 'menus',  'middleware' => []], function(){
    Route::get('/', [MenuController::class, 'index'])->name('api.menus.index');
    Route::post('/', [MenuController::class, 'store'])->name('api.menus.store');
    Route::get('/{menu}', [MenuController::class, 'show'])->name('api.menus.read');
    Route::put('/{menu}', [MenuController::class, 'update'])->name('api.menus.update');
    Route::delete('/{menu}', [MenuController::class, 'destroy'])->name('api.menus.delete');
});
