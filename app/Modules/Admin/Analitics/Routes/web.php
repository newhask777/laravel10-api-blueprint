<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Analitics\Controllers\AnaliticsController;

Route::group(['prefix' => 'analitics', 'middleware' => []], function () {
    Route::get('/export/{user}/{dateStart}/{dateEnd}', 'AnaliticsController@export')->name('analitics.export');

});
