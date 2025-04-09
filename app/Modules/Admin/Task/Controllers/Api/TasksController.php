<?php

namespace App\Modules\Admin\Task\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Admin\Task\Models\Task;
use App\Modules\Admin\Task\Requests\TaskRequest;
use App\Modules\Admin\Task\Services\TaskService;
use App\Services\Response\ResponseServise;
use Auth;

class TasksController extends Controller
{

    private  $service;

    /**
     * LeadController constructor.
     * @param $service
     */
    public function __construct(TaskService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //check access
        $this->authorize('view', Task::class);

        $result = $this->service->geTasks();

        return ResponseServise::sendJsonResponse(true, 200, [],[
            'items' => $result
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse
     */
    public function archive()
    {
        //check access
        $this->authorize('view', Task::class);

        $tasks = $this->service->archive();

        return ResponseServise::sendJsonResponse(true, 200, [],[
            'items' => $tasks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse
     */
    public function store(TaskRequest $request)
    {
        //check access
        $this->authorize('save', Task::class);

        return ResponseServise::sendJsonResponse(true, 200, [
            'item' => $this->service->store($request, Auth::user())
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse
     */
    public function show(Task $task)
    {
        //check access
        $this->authorize('view', Task::class);
        //
        return ResponseServise::sendJsonResponse(true, 200, [],[
            'item' => $task
        ]);

    }

}
