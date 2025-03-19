<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Analitics\Controllers\AnaliticsController;

Route::group(['prefix' => 'analitics',  'middleware' => []], function(){
    Route::get('/', [AnaliticsController::class, 'index'])->name('analitics.index');
    Route::get('/create', [AnaliticsController::class, 'create'])->name('analitics.create');
    Route::post('/', [AnaliticsController::class, 'store'])->name('analitics.store');
    Route::get('/{analitic}', [AnaliticsController::class, 'show'])->name('analitics.read');
    Route::get('/edit/{analitic}', [AnaliticsController::class, 'edit'])->name('analitics.edit');
    Route::put('/{analitic}', [AnaliticsController::class, 'update'])->name('analitics.update');
    Route::delete('/{analitic}', [AnaliticsController::class, 'destroy'])->name('analitics.delete');
});
