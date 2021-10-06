<?php

namespace Brain\Games\BrainCalc;

use function App\Engine\startGame;

function isResultOperator(string $operatorEnd, int $numberGeneration, int $numberGeneration1): int
{
    switch ($operatorEnd) {
        case '-':
            return $numberGeneration - $numberGeneration1;
        case '+':
            return $numberGeneration + $numberGeneration1;
        case '*':
            return $numberGeneration * $numberGeneration1;
        default:
            throw new \Exception('Error');
    }
}

function startBrainCalc(): void
{
    $roundDataGenerator = function (): array {
        $randNumberGeneration = rand(0, 99);
        $randNumberGeneration1 = rand(0, 99);
        $randOperator = ['+', '-', '*'];
        $randomOperatorIntermediate = array_rand($randOperator, 1);
        $randomOperatorEnd = $randOperator[$randomOperatorIntermediate];

        $result = isResultOperator($randomOperatorEnd, $randNumberGeneration, $randNumberGeneration1);

        $question = "{$randNumberGeneration} {$randomOperatorEnd} {$randNumberGeneration1}";
        $trueAnswer = "{$result}";
        return [$trueAnswer, $question];
    };
    $rules = 'What is the result of the expression?';
    startGame($roundDataGenerator, $rules);
}
