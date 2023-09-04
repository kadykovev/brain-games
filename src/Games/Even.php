<?php

namespace BrainGames\Games\Even;

const RULES = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $num): bool
{
    if ($num % 2) {
        return false;
    }

    return true;
}

function even(): array
{
    $randomNumber = rand(0, 99);

    return ['question' => $randomNumber, 'answer' => isEven($randomNumber) ? 'yes' : 'no'];
}
