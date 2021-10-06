<?php

namespace Brain\Games\BrainGcd;

use function App\Engine\startGame;

function startBrainGcd(): void
{
    $roundDataGenerator = function (): array {
        $randNumberGeneration = rand(0, 99);
        $randNumberGeneration1 = rand(0, 99);
        $question = "{$randNumberGeneration} {$randNumberGeneration1}";
        while ($randNumberGeneration1 != 0) {
            $m = $randNumberGeneration % $randNumberGeneration1;
            $randNumberGeneration = $randNumberGeneration1;
            $randNumberGeneration1 = $m;
        }
        $trueAnswer = "{$randNumberGeneration}";
        return [$trueAnswer, $question];
    };
    $rules = 'Find the greatest common divisor of given numbers.';
    startGame($roundDataGenerator, $rules);
}
