<?php

namespace App\Gcd;

use function App\Engine\toDoOpensAnswerCheck;
use function cli\line;
use function cli\prompt;

function toDoStartBrainGcd(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Find the greatest common divisor of given numbers.');
    for ($i = 0; $i < 3; $i++) {
        $randomInt = random_int(0, 99);
        $randomInt1 = random_int(0, 99);
        $question = "{$randomInt} {$randomInt1}";
        line('Question:' . ' ' . $question);
        $answer = prompt('Your answer');
        while ($randomInt1 != 0) {
                $m = $randomInt % $randomInt1;
                $randomInt = $randomInt1;
                $randomInt1 = $m;
        }
        $result = "{$randomInt}";
        toDoOpensAnswerCheck($answer, $result, $name);
    }
    line('Congratulations, ' . "{$name}!");
}
