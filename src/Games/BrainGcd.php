<?php

namespace Brain\Games\BrainGcd;

use function App\Engine\startGame;

function startBrainGcd(): void
{
    $roundDataGenerator = function (): array {
        $randomInt = rand(0, 99);
        $randomInt1 = rand(0, 99);
        $question = "{$randomInt} {$randomInt1}";
        while ($randomInt1 != 0) {
            $m = $randomInt % $randomInt1;
            $randomInt = $randomInt1;
            $randomInt1 = $m;
        }
        $trueAnswer = "{$randomInt}";
        return [$trueAnswer, $question];
    };
    $rules = 'Find the greatest common divisor of given numbers.';
    startGame($roundDataGenerator, $rules);
}
