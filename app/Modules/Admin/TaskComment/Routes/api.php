<?php

use App\Modules\Admin\TaskComment\Controllers\Api\TasksCommentsController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'tasks_comments',  'middleware' => ['auth:api']], function(){
    Route::get('/', [TasksCommentsController::class, 'index'])->name('api.task-comments.index');
    Route::post('/', [TasksCommentsController::class, 'store'])->name('api.task-comments.store');
    Route::get('/{taskComment}', [TasksCommentsController::class, 'show'])->name('api.task-comments.read');
    Route::put('/{taskComment}', [TasksCommentsController::class, 'update'])->name('api.task-comments.update');
    Route::delete('/{taskComment}', [TasksCommentsController::class, 'destroy'])->name('api.task-comments.delete');
});
