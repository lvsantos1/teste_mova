<?php

date_default_timezone_set('America/Sao_Paulo');

use App\ContextDay;
use App\Messages\DaysOfTheWeek\Friday;
use App\Messages\DaysOfTheWeek\Monday;
use App\Messages\DaysOfTheWeek\Saturday;
use App\Messages\DaysOfTheWeek\Sunday;
use App\Messages\DaysOfTheWeek\Thursday;
use App\Messages\DaysOfTheWeek\Tuesday;
use App\Messages\DaysOfTheWeek\Wednesday;
use App\Messages\SpecialDate\SpecialDate;

require_once('vendor/autoload.php');

$today = new DateTimeImmutable;

$dates = [
    '20220622' => new SpecialDate('Feliz um ano de contrato!'),
    '20220623' => new SpecialDate('Feliz aniversário!'),
    'Sun' => new Sunday(),
    'Mon' => new Monday(),
    'Tue' => new Tuesday(),
    'Wed' => new Wednesday(),
    'Thu' => new Thursday(),
    'Fri' => new Friday(),
    'Sat' => new Saturday(),
];

$context = new ContextDay();

if(isset($dates[$today->format('Ymd')])) {
    $context->setStrategy($dates[$today->format('Ymd')]);
} else {
    $context->setStrategy($dates[$today->format('D')]);
}

echo $context->getMessage();