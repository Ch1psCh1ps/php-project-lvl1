<?php

namespace App\Calc;

use function App\Engine\toDoOpensAnswerCheck;
use function cli\line;
use function cli\prompt;

function toDoStarBrainCalc(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
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
        toDoOpensAnswerCheck($answer, $trueAnswer, $name);
    }
    line('Congratulations, ' . "{$name}!");
}
