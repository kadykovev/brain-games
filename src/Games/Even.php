<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greeting;

function isEven(int $num): bool
{
    if ($num % 2) {
        return false;
    }

    return true;
}

function even(): void
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $numberOfQuestions = 3;

    $name = greeting();
    line($rules);

    for ($i = 1; $i <= $numberOfQuestions; $i++) {
        $randomNumber = rand(0, 99);
        line("Question: %s", $randomNumber);
        $answer = prompt("Your answer");

        if ((isEven($randomNumber) && $answer == 'yes') || (!isEven($randomNumber) && $answer == 'no')) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, isEven($randomNumber) ? 'yes' : 'no');
            line("Let's try again, %s!", $name);
            return;
        }
    }

    line("Congratulations, %s!", $name);
}
