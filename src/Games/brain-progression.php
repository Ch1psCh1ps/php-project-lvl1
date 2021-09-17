<?php

namespace App\Progression;

use function App\Gre\isGreetings;
use function cli\line;
use function cli\prompt;

function isProgression()
{
    $name = isGreetings();
    for ($i= 0; $i < 3; $i++) {
        $randProgressionSize = random_int(5, 10);
        $randPosition = random_int(1, $randProgressionSize);
        $randStepInProgression = random_int(1, 5);
        $randProgressionArray = [1];
        $question = '';
        for ($t = 0; $t <= $randProgressionSize; $t++) {
            if ($t === $randPosition) {
                $cufra = "..";
                $result = $randProgressionArray[$randPosition];
            } else {
                $cufra = $randProgressionArray[$t];
            }
            $randProgressionArray[] = $randProgressionArray[$t] + $randStepInProgression;
            if ($t >= 1) {
                $question .= " {$cufra}";
            }
        }
        line('Question:' . ' ' . $question);
        $answer = prompt('Your answer');
        if ($answer == $result) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.
Let's try again, {$name}!");
            die();
        }
    }
    line('Congratulations, ' . "{$name}!");
}