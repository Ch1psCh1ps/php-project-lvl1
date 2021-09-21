<?php

namespace Brain\Games\BrainProgression;

use function App\Engine\opensAnswerCheck;

function createProgression()
{
    $randProgressionSize = random_int(6, 10);
    for ($t = 0; $t <= $randProgressionSize; $t++) {
        $randStepInProgression = random_int(1, 5);
        $randProgressionArray = [1];
        $randProgressionArray[] = $randProgressionArray[$t] + $randStepInProgression;
        $cufra = $randProgressionArray[$t];
        $qustion = "{$randProgressionArray}";
    }
    return $qustion;
}

function isResultEnd()
{
    $randProgressionSize = random_int(6, 10);
    $randPosition = random_int(1, $randProgressionSize);
    $randProgressionArray = [1];
    $result = "$randProgressionArray[$randPosition]";
    return $result;
}

function startBrainProgression(): void
{
    $gcdFunction = function () {
        $resultEnd = isResultEnd();
        $question = createProgression();
        $lineCalc = 'What number is missing in the progression?';

        $trueAnswer = $resultEnd;

        $arrayFromGames = [];
        $arrayFromGames[] = $lineCalc;
        $arrayFromGames[] = $trueAnswer;
        $arrayFromGames[] = $question;
        return $arrayFromGames;
    };
    opensAnswerCheck($gcdFunction);
}
