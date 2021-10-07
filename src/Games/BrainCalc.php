<?php

namespace Brain\Games\BrainCalc;

use function App\Engine\startGame;

function isResultOperator(string $operators, int $number, int $number1): int
{
    switch ($operators) {
        case '-':
            return $number - $number1;
        case '+':
            return $number + $number1;
        case '*':
            return $number * $number1;
        default:
            throw new \Exception('Error');
    }
}

function startBrainCalc(): void
{
    $roundDataGenerator = function (): array {
        $number = rand(0, 99);
        $number1 = rand(0, 99);
        $number2 = rand(0, 2);
        $operators = ['+', '-', '*'];
        $randomOperator = $operators[$number2];

        $result = isResultOperator($randomOperator, $number, $number1);

        $question = "{$number} {$randomOperator} {$number1}";
        $trueAnswer = "{$result}";
        return [$trueAnswer, $question];
    };
    $rules = 'What is the result of the expression?';
    startGame($roundDataGenerator, $rules);
}
