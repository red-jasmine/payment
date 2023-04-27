<?php

namespace RedJasmine\Payment\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use RedJasmine\Support\Contracts\UserInterface;
use RedJasmine\Support\Helpers\UserObjectBuilder;
use RedJasmine\Support\Traits\HasDateTimeFormatter;

class Payment extends Model
{

    use HasDateTimeFormatter;

    public $incrementing = false;


    public function getOwner() : UserInterface
    {
        return new  UserObjectBuilder([
                                          'type'     => $this->owner_type,
                                          'uid'      => $this->owner_uid,
                                          'nickname' => $this->owner_nickname
                                      ]);
    }


    public function info() : HasOne
    {
        return $this->hasOne(PaymentInfo::class, 'id', 'id');
    }
}
