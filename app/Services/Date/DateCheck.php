<?php

namespace App\Services\Date;

use DateTime;

class DateCheck
{
    public static function isValid($str_dt, $str_dateformat = "Y-m-d") : bool {

        $date = \DateTime::createFromFormat($str_dateformat, $str_dt);

        if($date && (int)$date->format("Y") < 1900) {
            return false;
        }

        return $date && DateTime::getLastErrors() == 0 && DateTime::getLastErrors() == 0;

    }

}
