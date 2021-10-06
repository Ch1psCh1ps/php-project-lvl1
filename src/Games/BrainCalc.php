<?php

namespace Brain\Games\BrainCalc;

use function App\Engine\startGame;

function isResultOperator(string $randomOperatorEnd, int $randNumberGeneration, int $randNumberGeneration1): int
{
    switch ($randomOperatorEnd) {
        case '-':
            return $randNumberGeneration - $randNumberGeneration1;
        case '+':
            return $randNumberGeneration + $randNumberGeneration1;
        case '*':
            return $randNumberGeneration * $randNumberGeneration1;
        default:
            throw new \Exception('Error');
    }
}

function startBrainCalc(): void
{
    $roundDataGenerator = function (): array {
        $randNumberGeneration = rand(0, 99);
        $randNumberGeneration1 = rand(0, 99);
        $randOperatorArray = ['+', '-', '*'];
        $randomOperator = array_rand($randOperatorArray, 1);
        $randomOperatorEnd = $randOperatorArray[$randomOperator];

        $result = isResultOperator($randomOperatorEnd, $randNumberGeneration, $randNumberGeneration1);

        $question = "{$randNumberGeneration} {$randomOperatorEnd} {$randNumberGeneration1}";
        $trueAnswer = "{$result}";
        return [$trueAnswer, $question];
    };
    $rules = 'What is the result of the expression?';
    startGame($roundDataGenerator, $rules);
}
