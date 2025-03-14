<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Role\Controllers\RoleController;

Route::group(['prefix' => 'roles',  'middleware' => []], function(){
    Route::get('/', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/{role}', [RoleController::class, 'show'])->name('roles.read');
    Route::get('/edit/{role}', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/{role}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/{role}', [RoleController::class, 'destroy'])->name('roles.delete');
});


Route::group(['prefix' => 'permissions',  'middleware' => []], function(){
    Route::get('/', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::post('/', [PermissionController::class, 'store'])->name('permissions.store');
    Route::get('/{role}', [PermissionController::class, 'show'])->name('permissions.read');
    Route::get('/edit/{role}', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::put('/{role}', [PermissionController::class, 'update'])->name('permissions.update');
    Route::delete('/{role}', [PermissionController::class, 'destroy'])->name('permissions.delete');
});