<?php

namespace Brain\Games\BrainEven;

use function App\Engine\opensAnswerCheck;

function startBrainEven(): void
{
    $evenFunction = function (): array {
        $randomInt = random_int(1, 99);
        $question = $randomInt;
        $trueAnswer = ($randomInt % 2 === 0) ? 'yes' : 'no';
        $questionForComparisons = ($randomInt % 2 === 0) ? 'yes' : 'no';
        $lineCalc = 'Answer "yes" if the number is even, otherwise answer "no".';
        $gameValueResult = null;
        return [$lineCalc, $trueAnswer, $question, $questionForComparisons, $gameValueResult];
    };
    opensAnswerCheck($evenFunction);
}
