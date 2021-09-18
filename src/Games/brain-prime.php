<?php

namespace App\Prime;

use function App\Gre\isGreetings;
use function cli\line;
use function cli\prompt;

function verifyPrimeNumber($tally)
{
    for ($t = 2; $t <= $tally / 2; $t++) {
        if ($tally % $t == 0) {
            return false;
        }
    }
    return true;
}

function isPrime()
{
    $name = isGreetings();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $randomInt = rand(1, 50);
        $question = $randomInt;
        line('Question:' . ' ' . $question);
        $answer = prompt('Your answer');
        $result = verifyPrimeNumber($randomInt);
        if ($result === true) {
            $trueAnswer = 'yes';
        } else {
            $trueAnswer = 'no';
        }
        if ($answer === $trueAnswer) {
           line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$trueAnswer}'.
Let's try again, {$name}!");
            die();
        }
    }
    line('Congratulations, ' . "{$name}!");
}
