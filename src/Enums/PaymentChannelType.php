<?php

namespace RedJasmine\Payment\Enums;

/**
 * 支付渠道
 */
enum PaymentChannelType: string
{
    case  ALIPAY = 'ALIPAY';
    case  WECHAT = 'WECHAT';

    public static function options() : array
    {
        return [
            self::ALIPAY->value => '支付宝',
            self::WECHAT->value => '微信',
        ];

    }

}
