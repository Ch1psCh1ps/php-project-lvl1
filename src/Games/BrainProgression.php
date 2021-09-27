<?php

namespace Brain\Games\BrainProgression;

use function App\Engine\startGame;

function startBrainProgression(): void
{
    $roundDataGenerator = function (): array {
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
        return [$trueAnswer, $question];
    };
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    startGame($roundDataGenerator, $rules);
}
