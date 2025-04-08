<?php

namespace App\Modules\Admin\Unit\Controllers\Api;

use App\Modules\Admin\Unit\Models\Unit;
use App\Modules\Admin\Unit\Services\UnitsService;
use App\Services\Response\ResponseServise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnitController extends Controller
{
    private $service;

    /**
     * RoleController constructor.
     */
    public function __construct(UnitsService $unitsService)
    {
        $this->service = $unitsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //

        return ResponseServise::sendJsonResponse(true, 200,[],[
            'items' =>  $this->service->getUnits()
        ]);
    }
}
