<?php

namespace FinancesAdmin\Util;

class MoneyUtil {

    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public static function fromStore($value)
    {
        $value = preg_replace("/\./", "", $value);
        $value = preg_replace("/,/", ".", $value);
        return new static($value);
    }

    public static function fromView($value)
    {
        return new static($value);
    }

    public function valueFmt()
    {
        return 'R$ ' . number_format($this->value, 2, ',', '.' );
    }

    public function getValue()
    {
        return $this->value;
    }
}