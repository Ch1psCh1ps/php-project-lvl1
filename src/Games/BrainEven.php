<?php

namespace Brain\Games\BrainEven;

use function App\Engine\opensAnswerCheck;

function startBrainEven(): void
{
    $evenFunction = function (): array {
        $randomInt = random_int(0, 99);
        $question = $randomInt;
        $trueAnswer = ($randomInt % 2 === 0) ? 'yes' : 'no';
        if ($trueAnswer == 'yes') {
            $questionForComparisons = 'yes';
        } else {
            $questionForComparisons = 'no';
        }
        $lineCalc = 'Answer "yes" if the number is even, otherwise answer "no".';
        $arrayFromGames = [];
        $arrayFromGames[] = $lineCalc;
        $arrayFromGames[] = $trueAnswer;
        $arrayFromGames[] = $question;
        $arrayFromGames[] = $questionForComparisons;
        return $arrayFromGames;
    };
    opensAnswerCheck((array)$evenFunction);
}
