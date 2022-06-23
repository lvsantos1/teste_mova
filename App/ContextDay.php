<?php

namespace App;

use App\Contracts\MessageDeliveryInterface;

class ContextDay implements MessageDeliveryInterface{

    private MessageDeliveryInterface $messageDelivery;

    public function __construct(){}

    public function setStrategy(MessageDeliveryInterface $delivery){
        $this->messageDelivery = $delivery;
    }

    public function getMessage() : string {
        return $this->messageDelivery->getMessage();
    }
}