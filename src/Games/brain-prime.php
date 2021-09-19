<?php

namespace App\Prime;

use function App\Engine\engine;
use function App\Gre\isGreetings;
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

function isPrime(): void
{
    $name = isGreetings();
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
        engine($answer, $trueAnswer);
    }
    line('Congratulations, ' . "{$name}!");
}
