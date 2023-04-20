<?php

namespace RedJasmine\Payment\Contracts;

interface PaymentInterface
{

    /**
     * 创建订单
     * @return mixed
     */
    public function create() : mixed;

    /**
     * 获取支付方式
     * @return mixed
     */
    public function paying() : mixed;

    /**
     * 支付 选择支付方式
     * @return mixed
     */
    public function payment() : mixed;


    /**
     * 成功通知
     * @return mixed
     */
    public function notify() : mixed;


    public function redirect();
}
