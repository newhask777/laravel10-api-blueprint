<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Lead\Controllers\Api\LeadController;

Route::group(['prefix' => 'leads',  'middleware' => ['auth:api']], function(){
    Route::get('/', [LeadController::class, 'index'])->name('api.leads.index');
    Route::post('/', [LeadController::class, 'store'])->name('api.leads.store');
    Route::get('/{lead}', [LeadController::class, 'show'])->name('api.leads.read');
    Route::put('/{lead}', [LeadController::class, 'update'])->name('api.leads.update');
    Route::delete('/{lead}', [LeadController::class, 'destroy'])->name('api.leads.delete');
});
