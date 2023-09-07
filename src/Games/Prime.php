<?php

namespace BrainGames\Games\Prime;

const RULES = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number): bool
{
    if ($number == 2) {
        return true;
    }

    if ($number % 2 == 0) {
        return false;
    }

    $maxFactor = (int) sqrt($number);

    for ($i = 3; $i <= $maxFactor; $i += 2) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

function prime(): array
{
    $question = rand(1, 100);

    return ['question' => $question, 'answer' => isPrime($question) ? 'yes' : 'no'];
}
