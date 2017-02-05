<?php

namespace FinancesAdmin\Models;

use Illuminate\Database\Eloquent\Model;

class Spent extends Model
{
    protected $table = "spents";

    protected $fillable = [
        "description", "value", "dueDate", "paymentDate"
    ];
}