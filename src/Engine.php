<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function engine(callable $generateGameData, string $rules): void
{
    $rounds = 3;
    $gameData = [];

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($rules);

    for ($i = 0; $i < $rounds; $i++) {
        $gameData = $generateGameData();

        line("Question: %s", $gameData['question']);
        $answer = prompt("Your answer");

        if ($answer == $gameData['answer']) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $gameData['answer']);
            line("Let's try again, %s!", $name);
            return;
        }
    }

    line("Congratulations, %s!", $name);
}
