<?php

namespace App\Prime;

use function App\Gre\isGreetings;
use function cli\line;
use function cli\prompt;

function isPrime()
{
    $name = isGreetings();
    $result = '';
    $question = '';
    for ($i = 0; $i < 3; $i++) {
        $randomInt = random_int(1, 50);
        $question = $randomInt;
        line('Answer "yes" if given number is prime. Otherwise answer "no".');
        line('Question:' . ' ' . $question);
        $answer = prompt('Your answer');
        for ($t = $randomInt; $t > 2; $t--) {
            if ($randomInt % $t !== 0) {
                $result = $randomInt;
            }
        }
        if ($answer == $result && $answer === 'no') {
            line('Correct!');
        } elseif ($answer != $result && $answer === 'yes') {
            line('Correct!');
        } elseif ($answer == $result && $answer === 'no') {
            line("'{$answer}' is wrong answer ;(. Correct answer was 'yes'.
Let's try again, {$name}!");
            die();
        } elseif ($answer != $result && $answer === 'yes') {
            line("'{$answer}' is wrong answer ;(. Correct answer was 'no'.
Let's try again, {$name}!");
            die();
        }
    }
    line('Congratulations, ' . "{$name}!");
}
