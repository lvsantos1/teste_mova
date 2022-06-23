<?php

namespace App\Messages\SpecialDate;

use App\Contracts\MessageDeliveryInterface;

class SpecialDate implements MessageDeliveryInterface
{

    private string $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}