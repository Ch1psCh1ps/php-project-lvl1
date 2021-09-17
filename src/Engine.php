<?php
namespace App\Engine;

use function cli\line;

function engine($answer, $result)
{
    if ($answer == $result) {
        line('Correct!');
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.
Let's try again, {$name}!");
        die();
    }
}
