<?php

namespace RedJasmine\Payment\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use RedJasmine\Support\Contracts\UserInterface;
use RedJasmine\Support\Helpers\User\UserObject;
use RedJasmine\Support\Traits\HasDateTimeFormatter;

class Payment extends Model
{

    use HasDateTimeFormatter;

    public $incrementing = false;


    public function getOwner() : UserInterface
    {
        return new  UserObject([
                                          'type'     => $this->owner_type,
                                          'id'      => $this->owner_id,
                                          'nickname' => $this->owner_nickname
                                      ]);
    }


    public function info() : HasOne
    {
        return $this->hasOne(PaymentInfo::class, 'id', 'id');
    }
}
