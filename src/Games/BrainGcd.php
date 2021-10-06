<?php

namespace Brain\Games\BrainGcd;

use function App\Engine\startGame;

function startBrainGcd(): void
{
    $roundDataGenerator = function (): array {
        $numberGeneration = rand(0, 99);
        $numberGeneration1 = rand(0, 99);
        $question = "{$numberGeneration} {$numberGeneration1}";
        while ($numberGeneration1 != 0) {
            $m = $numberGeneration % $numberGeneration1;
            $numberGeneration = $numberGeneration1;
            $numberGeneration1 = $m;
        }
        $trueAnswer = "{$numberGeneration}";
        return [$trueAnswer, $question];
    };
    $rules = 'Find the greatest common divisor of given numbers.';
    startGame($roundDataGenerator, $rules);
}
