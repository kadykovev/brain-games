<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\engine;

const RULES = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $num): bool
{
    if ((bool) ($num % 2)) {
        return false;
    }

    return true;
}

function runEven(): void
{
    $generateGameData = function (): array {

        $randomNumber = rand(0, 99);

        return ['question' => $randomNumber, 'answer' => isEven($randomNumber) ? 'yes' : 'no'];
    };

    engine($generateGameData, RULES);
}
