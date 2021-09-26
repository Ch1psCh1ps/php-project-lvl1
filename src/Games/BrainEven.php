<?php

namespace Brain\Games\BrainEven;

use function App\Engine\opensAnswerCheck;

function startBrainEven(): void
{
    $evenFunction = function (): array {
        $randomInt = rand(1, 99);
        $question = $randomInt;
        $trueAnswer = ($randomInt % 2 === 0) ? 'yes' : 'no';
        $lineOfRulesOfTheGame = 'Answer "yes" if the number is even, otherwise answer "no".';
        return [$lineOfRulesOfTheGame, $trueAnswer, $question];
    };
    opensAnswerCheck($evenFunction);
}
