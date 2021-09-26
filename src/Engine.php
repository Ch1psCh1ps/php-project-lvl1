<?php

namespace App\Engine;

use function cli\line;
use function cli\prompt;

function opensAnswerCheck(callable $function): bool
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $count = 3;
    for ($i = 0; $i < $count; $i++) {
        [$lineOfRulesOfTheGame, $trueAnswer, $question] = $function();
        line("{$lineOfRulesOfTheGame}");
        line("Question: {$question}");
        $answer = prompt('Your answer');
        if ($answer == $trueAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$trueAnswer}'. Let's try again, {$name}!");
            die();
        }
    }
    line("Congratulations, {$name}!");
    return true;
}
