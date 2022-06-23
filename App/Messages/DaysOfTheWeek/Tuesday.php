<?php

namespace App\Messages\DaysOfTheWeek;

use App\Contracts\MessageDeliveryInterface;

class Tuesday implements MessageDeliveryInterface
{
    public function getMessage(): string
    {
        return 'Ótima terça-feira! #WorkHard';
    }
}