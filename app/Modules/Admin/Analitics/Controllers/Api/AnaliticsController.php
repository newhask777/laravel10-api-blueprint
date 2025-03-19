<?php

namespace App\Modules\Admin\Analitics\Controllers\Api;

use App\Modules\Admin\Analitics\Services\AnaliticsDataService;
use App\Modules\Admin\Lead\Models\Lead;
use App\Modules\Admin\User\Models\User;

use App\Services\Response\ResponseServise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnaliticsController extends Controller
{

    private  $service;

    /**
     * LeadController constructor.
     * @param $service
     */
    public function __construct(AnaliticsDataService $analiticDataService)
    {
        $this->service = $analiticDataService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse
     */
    public function index(Request $request): \Illuminate\Http\JsonResponse|\Illuminate\Contracts\Routing\ResponseFactory
    {
        //
        $this->authorize('viewAnalitic', Lead::class);

        $leadsData = $this->service->getAnalitic($request);

        return ResponseServise::sendJsonResponse(
            true,
            200,
            [],
            [
                'items' => $leadsData
            ]
        );
    }
}
