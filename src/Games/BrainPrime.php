<?php

namespace App\Prime;

use function App\Engine\toDoOpensAnswerCheck;
use function cli\line;
use function cli\prompt;

function verifyPrimeNumber(int $tally): int
{
    if ($tally === 1) {
        return 0;
    }
    for ($t = 2; $t <= $tally / 2; $t++) {
        if ($tally % $t == 0) {
            return 0;
        }
    }
    return 1;
}

function toDoStartBrainPrime(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $randomInt = rand(1, 50);
        $question = $randomInt;
        line('Question:' . ' ' . $question);
        $answer = prompt('Your answer');
        $result = verifyPrimeNumber($randomInt);
        if ($result == 1) {
            $trueAnswer = 'yes';
        } else {
            $trueAnswer = 'no';
        }
        toDoOpensAnswerCheck($answer, $trueAnswer, $name);
    }
    line('Congratulations, ' . "{$name}!");
}
