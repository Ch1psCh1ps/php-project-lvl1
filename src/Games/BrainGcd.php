<?php

namespace Brain\Games\BrainGcd;

use function App\Engine\opensAnswerCheck;

function startBrainGcd(): void
{
    $gcdFunction = function (): array {
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
        $questionForComparisons = $trueAnswer;
        $gameValueResult = null;
        return [$lineCalc, $trueAnswer, $question, $questionForComparisons, $gameValueResult];
    };
    opensAnswerCheck($gcdFunction);
}
