<?php

namespace App\Services\Date\Facade;

use App\Services\Date\DateCheck;
use Illuminate\Support\Facades\Facade;


class DateServiceFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'dateCheck';
    }
}
