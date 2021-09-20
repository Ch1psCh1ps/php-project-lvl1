<?php

namespace App\Engine;

use function cli\line;

function toDoOpensAnswerCheck(string $answer, string $result, string $name): bool
{
    if ($answer == $result) {
        line('Correct!');
        return true;
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'. Let's try again, {$name}!");
        die();
    }
}
