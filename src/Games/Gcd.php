<?php

namespace BrainGames\Games\Gcd;

const RULES = 'Find the greatest common divisor of given numbers.';

function gcd(): array
{
    $preGcd  = rand(1, 5);
    $preNum1 = rand(1, 25);
    $preNum2 = rand(1, 25);

    $i = 2;
    $j = 1;

    while ($i <= $preNum1 && $i <= $preNum2) {
        if (!($preNum1 % $i) && !($preNum2 % $i)) {
            $j = $i;
        }
        $i++;
    }

    return ['question' => $preGcd * $preNum1 . " " . $preGcd * $preNum2 , 'answer' => $preGcd * $j];
}
