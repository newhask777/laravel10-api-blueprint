<?php


use App\Modules\Admin\Task\Controllers\Api\TasksController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'tasks',  'middleware' => ['auth:api']], function(){
    Route::get('/', [TasksController::class, 'index'])->name('api.tasks.index');
    Route::post('/', [TasksController::class, 'store'])->name('api.tasks.store');
    Route::get('/{task}', [TasksController::class, 'show'])->name('api.tasks.read');

    Route::get('/archive/index', [TasksController::class, 'archive'])->name('tasks.archive.index');
});

