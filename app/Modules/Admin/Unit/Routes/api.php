<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Unit\Controllers\Api\UnitController;

Route::group(['prefix' => 'units',  'middleware' => ['auth:api']], function(){
    Route::get('/', [UnitController::class, 'index'])->name('api.units.index');
    Route::post('/', [UnitController::class, 'store'])->name('api.units.store');
    Route::get('/{unit}', [UnitController::class, 'show'])->name('api.units.read');
    Route::put('/{unit}', [UnitController::class, 'update'])->name('api.units.update');
    Route::delete('/{unit}', [UnitController::class, 'destroy'])->name('api.units.delete');
});
