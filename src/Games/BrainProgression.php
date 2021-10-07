<?php

namespace Brain\Games\BrainProgression;

use function App\Engine\startGame;

function startBrainProgression(): void
{
    $roundDataGenerator = function (): array {
        $progressionSize = rand(6, 10);
        $position = rand(1, $progressionSize);
        $stepInProgression = rand(1, 5);
        $progression = [1];
        $question = '';
        $result = '';
        for ($t = 0; $t <= $progressionSize; $t++) {
            if ($t === $position) {
                $value = "..";
                $result = "{$progression[$position]}";
            } else {
                $value = $progression[$t];
            }
            $progression[] = $progression[$t] + $stepInProgression;
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
