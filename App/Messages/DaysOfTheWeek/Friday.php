<?php

namespace App\Messages\DaysOfTheWeek;

use App\Contracts\MessageDeliveryInterface;

class Friday implements MessageDeliveryInterface
{
    public function getMessage(): string
    {
        return 'Ótima sexta-feira! #WorkHard';
    }
}