<?php

namespace Brain\Games\BrainGcd;

use function App\Engine\opensAnswerCheck;

function startBrainGcd(): void
{
    $GcdFunction = function (): array {
        $randomInt = random_int(0, 99);
        $randomInt1 = random_int(0, 99);
        $question = "{$randomInt} {$randomInt1}";
        while ($randomInt1 != 0) {
            $m = $randomInt % $randomInt1;
            $randomInt = $randomInt1;
            $randomInt1 = $m;
        }
        $trueAnswer = "{$randomInt}";
        $lineCalc = 'Find the greatest common divisor of given numbers.';
        $arrayFromGames = [];
        $arrayFromGames[] = $lineCalc;
        $arrayFromGames[] = $trueAnswer;
        $arrayFromGames[] = $question;
        $questionForComparisons = $trueAnswer;
        $arrayFromGames[] = $questionForComparisons;
        return $arrayFromGames;
    };
    opensAnswerCheck((array)$GcdFunction);
}
