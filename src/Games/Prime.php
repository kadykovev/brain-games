<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\engine;

const RULES = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number): bool
{
    if ($number == 2) {
        return true;
    }

    if ($number == 1 || $number % 2 == 0) {
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

function runPrime(): void
{
    $generateGameData = function (): array {
        $question = rand(1, 100);

        return ['question' => $question, 'answer' => isPrime($question) ? 'yes' : 'no'];
    };

    engine($generateGameData, RULES);
}
