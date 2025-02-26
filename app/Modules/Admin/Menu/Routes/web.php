<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Menu\Controllers\MenuController;

Route::group(['prefix' => 'menus',  'middleware' => []], function(){
    Route::get('/', [MenuController::class, 'index'])->name('menus.index');
    Route::get('/create', [MenuController::class, 'create'])->name('menus.create');
    Route::post('/', [MenuController::class, 'store'])->name('menus.store');
    Route::get('/{menu}', [MenuController::class, 'show'])->name('menus.read');
    Route::get('/edit/{menu}', [MenuController::class, 'edit'])->name('menus.edit');
    Route::put('/{menu}', [MenuController::class, 'update'])->name('menus.update');
    Route::delete('/{menu}', [MenuController::class, 'destroy'])->name('menus.delete');
});
