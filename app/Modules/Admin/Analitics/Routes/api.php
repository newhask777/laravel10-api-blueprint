<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Analitics\Controllers\Api\AnaliticsController;

Route::group(['prefix' => 'analitics',  'middleware' => ['auth:api']], function(){
    Route::post('/', [AnaliticsController::class, 'index'])->name('api.analitics.store');
});
