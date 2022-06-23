<?php

namespace App\Messages\DaysOfTheWeek;

use App\Contracts\MessageDeliveryInterface;

class Saturday implements MessageDeliveryInterface
{
    public function getMessage(): string
    {
        return 'Feliz sábado! #TakeARest';
    }
}