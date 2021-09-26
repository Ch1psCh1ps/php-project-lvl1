<?php

namespace Brain\Games\BrainProgression;

use function App\Engine\opensAnswerCheck;

function startBrainProgression(): void
{
    $progressionFunction = function (): array {
        $randProgressionSize = rand(6, 10);
        $randPosition = rand(1, $randProgressionSize);
        $randStepInProgression = rand(1, 5);
        $randProgressionArray = [1];
        $question = '';
        $result = '';
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
        $trueAnswer = $result;
        $lineOfRulesOfTheGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
        return [$lineOfRulesOfTheGame, $trueAnswer, $question];
    };
    opensAnswerCheck($progressionFunction);
}
