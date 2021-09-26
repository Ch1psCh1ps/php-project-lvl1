<?php

namespace Brain\Games\BrainPrime;

use function App\Engine\opensAnswerCheck;

function verifyPrimeNumber(int $tally): int
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
    $primeFunction = function (): array {
        $randomInt = rand(1, 50);
        $question = $randomInt;
        $result = verifyPrimeNumber($randomInt);
        $trueAnswer = ($result === 1) ? 'yes' : 'no';
        $lineOfRulesOfTheGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
        return [$lineOfRulesOfTheGame, $trueAnswer, $question];
    };
    opensAnswerCheck($primeFunction);
}
