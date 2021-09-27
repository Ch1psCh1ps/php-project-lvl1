<?php

namespace App\Engine;

use function cli\line;
use function cli\prompt;

function startGame(callable $function, string $rules): bool
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $roundCount = 3;
    $rulesOfTheGame = $rules;
    line("{$rulesOfTheGame}");
    for ($i = 0; $i < $roundCount; $i++) {
        [$trueAnswer, $question] = $function();
        line("Question: {$question}");
        $answer = prompt('Your answer');
        if ($answer == $trueAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$trueAnswer}'. Let's try again, {$name}!");
            return false;
        }
    }
    line("Congratulations, {$name}!");
    return true;
}
