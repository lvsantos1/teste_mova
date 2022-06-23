<?php

namespace App\Contracts;

interface MessageDeliveryInterface {
    public function getMessage() : string;
}