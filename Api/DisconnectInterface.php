<?php

namespace AtPay\CustomPayment\Api;

interface DisconnectInterface{

    /**
     * disconnect Api
     * @param string $name
     * @return string
     */
    public function disconnect($name);

};