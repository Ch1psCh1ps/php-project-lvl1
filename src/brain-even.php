<?php

namespace App\Even;

use function cli\line;
use function cli\prompt;

function isNumberAreEven()
{
    line('Answer "yes" if the number is even, otherwise answer "no"');
    for ($i = 0; $i < 3; $i++) {
    $randomInt = random_int(0, 99);
    line('Question:' . ' ' . $randomInt);
    $answer1 = prompt('Your answer');
        if ($randomInt % 2 === 0 && $answer1 === 'yes') {
            line('Correct!');
        } elseif ($randomInt % 2 !== 0 && $answer1 === 'no') {
            line('Correct!');
        } elseif ($randomInt % 2 === 0 && $answer1 !== 'yes') {
            line("'{$answer1}'" . " is wrong answer ;(. Correct answer was 'yes'.
Let's try again, bill");
            die();
        } else {
            line("'{$answer1}'" . " is wrong answer ;(. Correct answer was 'no'.
Let's try again, bill");
            die();
        }
    }
    line('Congratulations, Sam!');
}