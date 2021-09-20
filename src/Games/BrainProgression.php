<?php

namespace App\Progression;

use function App\Engine\toDoOpensAnswerCheck;
use function cli\line;
use function cli\prompt;

function toDoStartBrainProgression(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What number is missing in the progression?');
    for ($i = 0; $i < 3; $i++) {
        $randProgressionSize = random_int(6, 10);
        $randPosition = random_int(1, $randProgressionSize);
        $randStepInProgression = random_int(1, 5);
        $randProgressionArray = [1];
        $question = '';
        $result = '';
        for ($t = 0; $t <= $randProgressionSize; $t++) {
            if ($t === $randPosition) {
                $cufra = "..";
                $result = "{$randProgressionArray[$randPosition]}";
            } else {
                $cufra = $randProgressionArray[$t];
            }
            $randProgressionArray[] = $randProgressionArray[$t] + $randStepInProgression;
            if ($t >= 1) {
                $question .= "{$cufra} ";
            }
        }
        line('Question:' . ' ' . $question);
        $answer = prompt('Your answer');
        toDoOpensAnswerCheck($answer, $result, $name);
    }
    line('Congratulations, ' . "{$name}!");
}
