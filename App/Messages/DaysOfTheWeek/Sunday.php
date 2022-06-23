<?php

namespace App\Messages\DaysOfTheWeek;

use App\Contracts\MessageDeliveryInterface;

class Sunday implements MessageDeliveryInterface
{
    public function getMessage(): string
    {
        return 'Ótima domingo! #TakeARest';
    }
}