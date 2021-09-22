<?php

namespace Brain\Games\BrainProgression;

use function App\Engine\opensAnswerCheck;

function startBrainProgression(): void
{
    $gcdFunction = function (): array {
        $randProgressionSize = random_int(6, 10);
        $randPosition = random_int(1, $randProgressionSize);
        $randStepInProgression = random_int(1, 5);
        $randProgressionArray = [1];
        $question = '';
        for ($t = 0; $t <= $randProgressionSize; $t++) {
            if ($t === $randPosition) {
                $value = "..";
                $result = "{$randProgressionArray[$randPosition]}";
            } else {
                $value = $randProgressionArray[$t];
            }
            $randProgressionArray[] = $randProgressionArray[$t] + $randStepInProgression;
            if ($t >= 1) {
                $question .= "{$value} ";
            }
        }
        /** @var $result integer */
        $trueAnswer = $result;
        $gameValueResult = $result;
        $questionForComparisons = 'yes';
        $lineCalc = 'Answer "yes" if given number is prime. Otherwise answer "no".';
        $arrayFromGames = [];
        $arrayFromGames[] = $lineCalc;
        $arrayFromGames[] = $trueAnswer;
        $arrayFromGames[] = $question;
        $arrayFromGames[] = $questionForComparisons;
        $arrayFromGames[] = $gameValueResult;
        return $arrayFromGames;
    };
    opensAnswerCheck((array)$gcdFunction);
}
