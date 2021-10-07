<?php

namespace Brain\Games\BrainGcd;

use function App\Engine\startGame;

function startBrainGcd(): void
{
    $roundDataGenerator = function (): array {
        $number = rand(0, 99);
        $number1 = rand(0, 99);
        $question = "{$number} {$number1}";
        while ($number1 != 0) {
            $m = $number % $number1;
            $number = $number1;
            $number1 = $m;
        }
        $trueAnswer = "{$number}";
        return [$trueAnswer, $question];
    };
    $rules = 'Find the greatest common divisor of given numbers.';
    startGame($roundDataGenerator, $rules);
}
