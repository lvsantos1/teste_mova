<?php

namespace App\Messages\DaysOfTheWeek;

use App\Contracts\MessageDeliveryInterface;

class Monday implements MessageDeliveryInterface
{
    public function getMessage(): string
    {
        return 'Boa segunda-feira! #WorkHard';
    }
}