<?php

namespace AtPay\CustomPayment\Api;

interface StatusInterface{

    /**
     * Id Api
     * 
     * @return boolean|array
     * @param string $orderid order id
     *  @param string $status order id
     */
    public function setStatus($orderid, $status);
}