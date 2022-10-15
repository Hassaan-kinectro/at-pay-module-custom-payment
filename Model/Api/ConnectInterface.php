<?php

namespace AtPay\CustomPayment\Api;

interface ConnectInterface{

    /**
     * connect Api
     * 
     * @param string $name
     * @return string
     */
    public function connect($name);

}