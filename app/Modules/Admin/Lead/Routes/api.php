<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Lead\Controllers\Api\LeadController;

Route::group(['prefix' => 'leads',  'middleware' => ['auth:api']], function(){
    Route::get('/', [LeadController::class, 'index'])->name('api.leads.index');
    Route::post('/', [LeadController::class, 'store'])->name('api.leads.store');
    Route::get('/{lead}', [LeadController::class, 'show'])->name('api.leads.read');
    Route::put('/{lead}', [LeadController::class, 'update'])->name('api.leads.update');
    Route::delete('/{lead}', [LeadController::class, 'destroy'])->name('api.leads.delete');

    Route::get('/archive/index', [LeadController::class, 'archive'])->name('api.archive.index');
    Route::post('/create/check', [LeadController::class, 'checkExist'])->name('api.leads.check');
    Route::put('/update/quality/{lead}', [LeadController::class, 'updateQuality'])->name('api.leads.update.quality');

    Route::get('/addSale/count', [LeadController::class, 'getAddSaleCount'])->name('api.leads.addSale.count');
});
