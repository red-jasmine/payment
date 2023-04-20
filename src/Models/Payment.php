<?php

namespace RedJasmine\Payment\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use RedJasmine\Support\Traits\HasDateTimeFormatter;

class Payment extends Model
{

    use HasDateTimeFormatter;

    public $incrementing = false;


    public function info() : HasOne
    {
        return $this->hasOne(PaymentInfo::class, 'id', 'id');
    }
}
