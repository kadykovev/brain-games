<?php

namespace BrainGames\Math;

function isEven(int $num): bool
{
    if (ceil($num % 2)) {
        return false;
    }

    return true;
}

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
