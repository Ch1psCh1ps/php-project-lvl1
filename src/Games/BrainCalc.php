<?php

namespace Brain\Games\BrainCalc;

use function App\Engine\startGame;

function findResultOperator($randomOperatorEnd, $randomInt, $randomInt1): int
{
    $result = 0;
    switch ($randomOperatorEnd) {
        case '-':
            $result = $randomInt - $randomInt1;
            break;
        case '+':
            $result = $randomInt + $randomInt1;
            break;
        case '*':
            $result = $randomInt * $randomInt1;
            break;
        default:
            echo 'Error';
    }
    return $result;
}

function startBrainCalc(): void
{
    $roundDataGenerator = function (): array {
        $randomInt = rand(0, 99);
        $randomInt1 = rand(0, 99);
        $randomArray = ['+', '-', '*'];
        $randomOperator = array_rand($randomArray, 1);
        $randomOperatorEnd = $randomArray[$randomOperator];

        $result = findResultOperator($randomOperatorEnd, $randomInt, $randomInt1);

        $question = "{$randomInt} {$randomOperatorEnd} {$randomInt1}";
        $trueAnswer = "{$result}";
        return [$trueAnswer, $question];
    };
    $rules = 'What is the result of the expression?';
    startGame($roundDataGenerator, $rules);
}
