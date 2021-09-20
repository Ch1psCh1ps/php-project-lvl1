<?php

namespace App\Even;

use function App\Engine\toDoOpensAnswerCheck;
use function cli\line;
use function cli\prompt;

function toDoStartBrainEven(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 0; $i < 3; $i++) {
        $randomInt = random_int(0, 99);
        line('Question:' . ' ' . $randomInt);
        $answer = prompt('Your answer');
        if ($randomInt % 2 === 0) {
            $trueAnswer = 'yes';
        } else {
            $trueAnswer = 'no';
        }
        toDoOpensAnswerCheck($answer, $trueAnswer, $name);
    }
    line('Congratulations, ' . "{$name}!");
}
