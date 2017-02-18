<?php

namespace FinancesAdmin\Models;

use FinancesAdmin\Util\MoneyUtil;
use Illuminate\Database\Eloquent\Model;

class Spent extends Model
{
    protected $table = 'spents';

    protected $fillable = [
        'description', 'value', 'dueDate', 'paymentDate',
    ];

    protected $dates = ['dueDate', 'paymentDate'];

    public function getValueAttribute()
    {
        return MoneyUtil::fromView($this->attributes['value'])->valueFmt();
    }
}