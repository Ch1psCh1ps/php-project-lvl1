<?php

namespace App\Even;

use function App\Engine\engine;
use function App\Gre\isGreetings;
use function cli\line;
use function cli\prompt;

function isNumberAreEven(): void
{
    $name = isGreetings();
    for ($i = 0; $i < 3; $i++) {
        $randomInt = random_int(0, 99);
        line('Answer "yes" if the number is even, otherwise answer "no".');
        line('Question:' . ' ' . $randomInt);
        $answer = prompt('Your answer');
        if ($randomInt % 2 === 0) {
            $trueAnswer = 'yes';
        } else {
            $trueAnswer = 'no';
        }
        engine($answer, $trueAnswer);
    }
    line('Congratulations, ' . "{$name}!");
}
