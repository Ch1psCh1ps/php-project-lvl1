<?php

namespace Brain\Games\BrainCalc;

use function App\Engine\opensAnswerCheck;

function startBrainCalc(): void
{
    $calcFunction = function (): array {
        $lineOfRulesOfTheGame = 'What is the result of the expression?';
        $randomInt = rand(0, 99);
        $randomInt1 = rand(0, 99);
        $randomArray = ['+', '-', '*'];
        $randomZnak = array_rand($randomArray, 1);
        $randomZnakEnd = $randomArray[$randomZnak];

        switch ($randomZnakEnd) {
            case '-':
                $result = $randomInt - $randomInt1;
                break;
            case '+':
                $result = $randomInt + $randomInt1;
                break;
            default:
                $result = $randomInt * $randomInt1;
        }

        $question = "{$randomInt} {$randomZnakEnd} {$randomInt1}";
        $trueAnswer = "{$result}";
        return [$lineOfRulesOfTheGame, $trueAnswer, $question];
    };
    opensAnswerCheck($calcFunction);
}
