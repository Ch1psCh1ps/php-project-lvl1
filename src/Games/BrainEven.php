<?php

namespace Brain\Games\BrainEven;

use function App\Engine\startGame;

function startBrainEven(): void
{
    $roundDataGenerator = function (): array {
        $randNumberGeneration = rand(1, 99);
        $question = $randNumberGeneration;
        $trueAnswer = ($randNumberGeneration % 2 === 0) ? 'yes' : 'no';
        return [$trueAnswer, $question];
    };
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    startGame($roundDataGenerator, $rules);
}
