<?php

namespace App\Gre;

use function cli\line;
use function cli\prompt;

function isGreetings()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}