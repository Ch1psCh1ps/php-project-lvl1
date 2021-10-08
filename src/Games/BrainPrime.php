<?php

namespace Brain\Games\BrainPrime;

use function App\Engine\startGame;

function isDefinitionPrimeNum(int $tally): int
{
    if ($tally === 1) {
        return 0;
    }
    for ($t = 2; $t <= $tally / 2; $t++) {
        if ($tally % $t == 0) {
            return 0;
        }
    }
    return 1;
}

function startBrainPrime(): void
{
    $roundDataGenerator = function (): array {
        $number = rand(1, 50);
        $question = $number;
        $result = isDefinitionPrimeNum($number);
        $trueAnswer = ($result === 1) ? 'yes' : 'no';
        return [$trueAnswer, $question];
    };
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    startGame($roundDataGenerator, $rules);
}
