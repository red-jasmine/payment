<?php

namespace RedJasmine\Payment;

use RedJasmine\Payment\Contracts\PaymentInterface;

class Payment implements PaymentInterface
{
    // Build wonderful things
    /**
     * 创建订单
     * @return mixed
     */
    public function create() : mixed
    {
        // TODO: Implement create() method.
    }

    /**
     * 获取支付方式
     * @return mixed
     */
    public function paying() : mixed
    {
        // TODO: Implement paying() method.
    }

    /**
     * 支付 选择支付方式
     * @return mixed
     */
    public function payment() : mixed
    {
        // TODO: Implement payment() method.
    }

    /**
     * 成功通知
     * @return mixed
     */
    public function notify() : mixed
    {
        // TODO: Implement notify() method.
    }

    public function redirect()
    {
        // TODO: Implement redirect() method.
    }


}
