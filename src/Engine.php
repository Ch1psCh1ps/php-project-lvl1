<?php

namespace App\Engine;

use function cli\line;

function engine($answer, $result): string
{
    global $name;
    if ($answer == $result) {
        line('Correct!');
        return true;
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.
Let's try again, {$name}!");
        die();
    }
}
