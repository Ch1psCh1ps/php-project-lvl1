<?php

namespace App\Gcd;

use function App\Engine\engine;
use function App\Gre\isGreetings;
use function cli\line;
use function cli\prompt;

function greatestCommonFactor(): void
{
    $name = isGreetings();
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
            $result = $randomInt;
        engine($answer, $result);
    }
    line('Congratulations, ' . "{$name}!");
}
