<?php

namespace App\Messages\DaysOfTheWeek;

use App\Contracts\MessageDeliveryInterface;

class Wednesday implements MessageDeliveryInterface
{
    public function getMessage(): string
    {
        return 'Feliz quarta-feira! #WorkHard';
    }
}