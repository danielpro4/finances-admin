<?php

namespace FinancesAdmin\Util;

use Carbon\Carbon;

class DateUtil
{
    /**
     * @var Carbon
     */
    private $date;

    private function __construct($date)
    {
        $this->date = $date;
    }

    public static function fromStore($date, $format = 'd/m/Y')
    {
        $date = Carbon::createFromFormat($format, $date);

        return new static($date);
    }

    public function dateFmt()
    {
        return $this->date->format('d/m/Y');
    }

    public function getDate()
    {
        return $this->date;
    }

}