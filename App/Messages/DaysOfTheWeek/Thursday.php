<?php

namespace App\Messages\DaysOfTheWeek;

use App\Contracts\MessageDeliveryInterface;

class Thursday implements MessageDeliveryInterface
{
    public function getMessage(): string
    {
        return 'Feliz quinta-feira! #WorkHard';
    }
}