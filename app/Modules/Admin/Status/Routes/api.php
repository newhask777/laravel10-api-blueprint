<?php

use App\Modules\Admin\Status\Controllers\Api\StatusesController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'statuses', 'middleware' => ['auth:api']], function () {

Route::get('/', [StatusesController::class, 'index'])->name('api.statuses.index');

});
