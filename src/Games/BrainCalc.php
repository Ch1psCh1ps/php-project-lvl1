<?php

namespace Brain\Games\BrainCalc;

use function App\Engine\opensAnswerCheck;

function startBrainCalc(): void
{
    $calcFunction = function (): array {
        $lineCalc = 'What is the result of the expression?';
        $randomInt = random_int(0, 99);
        $randomInt1 = random_int(0, 99);
        $randomArray = ['+', '-', '*'];
        $randomZnak = array_rand($randomArray, 1);
        $randomZnakEnd = $randomArray[$randomZnak];

        if ($randomZnakEnd === '-') {
            $result = $randomInt - $randomInt1;
        } elseif ($randomZnakEnd === '+') {
            $result = $randomInt + $randomInt1;
        } else {
            $result = $randomInt * $randomInt1;
        }

        $question = "{$randomInt} {$randomZnakEnd} {$randomInt1}";
        $trueAnswer = "{$result}";
        $arrayFromGames = [];
        $arrayFromGames[] = $lineCalc;
        $arrayFromGames[] = $trueAnswer;
        $arrayFromGames[] = $question;
        $questionForComparisons = "{$result}";
        $arrayFromGames[] = $questionForComparisons;
        return $arrayFromGames;
    };
    opensAnswerCheck($calcFunction);
}
