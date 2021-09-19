<?php

// greetings
namespace App\Gre;

use function cli\line;
use function cli\prompt;

function isGreetings(): string // greetings
{
    line('Welcome to the Brain Game!');
    global $name;
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
