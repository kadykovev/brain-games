<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Math\isPrime;

const RULES = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function prime(): array
{
    $question = rand(1, 100);

    return ['question' => $question, 'answer' => isPrime($question) ? 'yes' : 'no'];
}
