<?php

Route::group(['prefix' => 'tests'], function () {
    Route::get('/', [TestController::class, 'index'])->middleware()->name('tests.index');
    Route::get('/create', [TestController::class, 'create'])->middleware()->name('tests.create');
    Route::post('/', [TestController::class, 'store'])->middleware()->name('tests.store');
    Route::get('/{test}', [TestController::class, 'show'])->middleware()->name('tests.read');
    Route::get('/edit/{test}', [TestController::class, 'edit'])->middleware()->name('tests.edit');
    Route::put('/{test}', [TestController::class, 'update'])->middleware()->name('tests.update');
    Route::delete('/{test}', [TestController::class, 'destroy'])->middleware()->name('tests.delete');
});
