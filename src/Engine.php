<?php

namespace BrainGames\Engine;

use function BrainGames\Cli\greeting;
use function cli\line;
use function cli\prompt;

function run(string $game): void
{
    $rounds = 3;
    $rules = constant("\\BrainGames\\Games\\" . ucfirst($game) . "\\RULES");
    $currentGame = "\\BrainGames\\Games\\" . ucfirst($game) . "\\" . $game;
    $gameData = [];

    $name = greeting();
    line($rules);

    for ($i = 0; $i < $rounds; $i++) {
        if (is_callable($currentGame)) {
            $gameData = call_user_func($currentGame);
        }

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
