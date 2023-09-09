<?php

namespace BrainGames\Games\Even;

use function BrainGames\Math\isEven;

const RULES = 'Answer "yes" if the number is even, otherwise answer "no".';

function even(): array
{
    $randomNumber = rand(0, 99);

    return ['question' => $randomNumber, 'answer' => isEven($randomNumber) ? 'yes' : 'no'];
}
