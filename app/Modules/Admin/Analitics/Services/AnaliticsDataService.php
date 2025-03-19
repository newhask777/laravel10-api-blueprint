<?php


namespace App\Modules\Admin\Analitics\Services;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnaliticsDataService
{

    public function getAnalitic($request)
    {
        $dateStart = Carbon::now();
        if($request->dateStart) {
            $dateStart = Carbon::parse($request->dateStart);
        }

        $dateEnd = Carbon::now();
        if($request->dateEnd) {
            $dateEnd = Carbon::parse($request->dateEnd);
        }

        $leadsData = DB::select(
            'CALL countLeads("'.$dateStart->format('Y-m-d') . '","'.$dateEnd->format('Y-m-d') . '")'
        );

        return $leadsData;
    }
}
