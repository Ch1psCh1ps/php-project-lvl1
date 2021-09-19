<?php

namespace App\Calc;

use function App\Engine\engine;
use function App\Gre\isGreetings;
use function cli\line;
use function cli\prompt;

function itIsRandomCalc(): void
{
    $name = isGreetings();
    line('What is the result of the expression?');
    for ($i = 0; $i < 3; $i++) {
        $result = '';
        $randomInt = random_int(0, 99);
        $randomInt1 = random_int(0, 99);
        $randomArray = ['+', '-', '*'];
        $randomZnak = array_rand($randomArray, 1);
        $randomZnakEnd = $randomArray[$randomZnak];
        if ($randomZnakEnd === '-') {
            $result = $randomInt - $randomInt1;
        } elseif ($randomZnakEnd === '+') {
            $result = $randomInt + $randomInt1;
        } else {
            $result = $randomInt * $randomInt1;
        }
        $question = "{$randomInt} {$randomZnakEnd} {$randomInt1}";
        line('Question:' . ' ' . $question);
        $answer = prompt('Your answer');
        $trueAnswer = "{$result}";
        engine($answer, $trueAnswer);
    }
    line('Congratulations, ' . "{$name}!");
}
