<?php

Route::group(['prefix' => 'tests'], function () {
    Route::get('/', [Api\TestController::class, 'index'])->middleware()->name('api.tests.index');
    Route::post('/', [Api\TestController::class, 'store'])->middleware()->name('api.tests.store');
    Route::get('/{test}', [Api\TestController::class, 'show'])->middleware()->name('api.tests.read');
    Route::put('/{test}', [Api\TestController::class, 'update'])->middleware()->name('api.tests.update');
    Route::delete('/{test}', [Api\TestController::class, 'destroy'])->middleware()->name('api.tests.delete');
});
