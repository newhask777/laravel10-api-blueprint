<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Sources\Controllers\Api\SourcesController;

Route::group(['prefix' => 'sources',  'middleware' => ['auth:api']], function(){
    Route::get('/', [SourcesController::class, 'index'])->name('api.sources.index');
    Route::post('/', [SourcesController::class, 'store'])->name('api.sources.store');
    Route::get('/{source}', [SourcesController::class, 'show'])->name('api.sources.read');
    Route::put('/{source}', [SourcesController::class, 'update'])->name('api.sources.update');
    Route::delete('/{source}', [SourcesController::class, 'destroy'])->name('api.sources.delete');
});
