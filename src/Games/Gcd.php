<?php

namespace BrainGames\Games\Gcd;

const RULES = 'Find the greatest common divisor of given numbers.';

function gcd(): array
{
    $initialNum1 = rand(1, 25);
    $initialNum2 = rand(1, 25);
    $guaranteedGCD  = rand(1, 5);
    $additionalGCD = 1;

    for ($i = 2; $i <= $initialNum1 && $i <= $initialNum2; $i++) {
        if (!(bool)($initialNum1 % $i) && !(bool)($initialNum2 % $i)) {
            $additionalGCD = $i;
        }
    }

    return [
        'question' => $guaranteedGCD * $initialNum1 . " " . $guaranteedGCD * $initialNum2,
        'answer' => $guaranteedGCD * $additionalGCD
    ];
}
