<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\LeadComment\Controllers\Api\LeadCommentController;

Route::group(['prefix' => 'lead-comments',  'middleware' => ['auth:api']], function(){
    Route::get('/', [LeadCommentController::class, 'index'])->name('api.lead-comments.index');
    Route::post('/', [LeadCommentController::class, 'store'])->name('api.lead-comments.store');
    Route::get('/{leadComment}', [LeadCommentController::class, 'show'])->name('api.lead-comments.read');
    Route::put('/{leadComment}', [LeadCommentController::class, 'update'])->name('api.lead-comments.update');
    Route::delete('/{leadComment}', [LeadCommentController::class, 'destroy'])->name('api.lead-comments.delete');
});
