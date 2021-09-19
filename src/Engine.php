<?php

// engine all
namespace App\Engine;

use function cli\line;

function engine(string $answer, string $result): bool // engine
{
    global $name;
    if ($answer == $result) {
        line('Correct!');
        return true;
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'. Let's try again, {$name}!");
        die();
    }
}
