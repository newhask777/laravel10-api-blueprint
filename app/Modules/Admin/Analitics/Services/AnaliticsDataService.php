<?php


namespace App\Modules\Admin\Analitics\Services;


use App\Modules\Admin\Lead\Models\Lead;
use App\Services\Date\Facade\DateServiceFacade;
use App\Services\Response\ResponseServise;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnaliticsDataService
{

    public function getAnalitic($request)
    {
        $dateStart = Carbon::now();
        if($request->dateStart && DateServiceFacade::isValid($dateStart, "d.m.Y")) {
            $dateStart = Carbon::parse($request->dateStart);
        }

        $dateEnd = Carbon::now();
        if($request->dateEnd && DateServiceFacade::isValid($dateEnd, "d.m.Y")) {
            $dateEnd = Carbon::parse($request->dateEnd);
        }

        $leadsData = DB::select(
            'CALL countLeads("'.$dateStart->format('Y-m-d') . '","'.$dateEnd->format('Y-m-d') . '")'
        );

        return $leadsData;
    }

}
