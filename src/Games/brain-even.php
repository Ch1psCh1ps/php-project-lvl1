<?php

namespace App\Even;

use function App\Gre\isGreetings;
use function cli\line;
use function cli\prompt;

function isNumberAreEven()
{
    $name = isGreetings();
    for ($i = 0; $i < 3; $i++) {
        $randomInt = random_int(0, 99);
        line('Answer "yes" if the number is even, otherwise answer "no".');
        line('Question:' . ' ' . $randomInt);
        $answer = prompt('Your answer');
        if ($randomInt % 2 === 0 && $answer === 'yes') {
            line('Correct!');
        } elseif ($randomInt % 2 !== 0 && $answer === 'no') {
            line('Correct!');
        } elseif ($randomInt % 2 === 0 && $answer !== 'yes') {
            line("'{$answer}'" . " is wrong answer ;(. Correct answer was 'yes'.
Let's try again, " . "{$name}!");
            die();
        } else {
            line("'{$answer}'" . " is wrong answer ;(. Correct answer was 'no'.
Let's try again, " . "{$name}!");
            die();
        }
    }
    line('Congratulations, ' . "{$name}!");
}
