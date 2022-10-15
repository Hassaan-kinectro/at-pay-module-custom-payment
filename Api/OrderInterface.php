<?php

namespace AtPay\CustomPayment\Api;

interface OrderInterface{

    /**
     * Id Api
     * 
     * @return boolean|array
     * @param string $orderid order id
     */
    public function getOrder($orderid);
}