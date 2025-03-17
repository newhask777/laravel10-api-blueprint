<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Role\Controllers\Api\RoleController;

Route::group(['prefix' => 'roles',  'middleware' => ['auth:api']], function(){
    Route::get('/', [RoleController::class, 'index'])->name('api.roles.index');
    Route::post('/', [RoleController::class, 'store'])->name('api.roles.store');
    Route::get('/{role}', [RoleController::class, 'show'])->name('api.roles.read');
    Route::put('/{role}', [RoleController::class, 'update'])->name('api.roles.update');
    Route::delete('/{role}', [RoleController::class, 'destroy'])->name('api.roles.delete');
});
