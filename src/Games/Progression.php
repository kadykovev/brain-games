<?php

namespace BrainGames\Games\Progression;

const RULES = 'What number is missing in the progression?';

function progression(): array
{
    $numOfNumbers = 10;
    $startNumber = rand(0, 25);
    $interval = rand(1, 10);
    $placeInLine = rand(0, $numOfNumbers - 1);

    for ($i = 0; $i < $numOfNumbers; $i++) {
        $currentNum = $startNumber + $interval * $i;

        if ($i == $placeInLine) {
            $arrOfNumbers[] = '..';
            $answer = $currentNum;
        } else {
            $arrOfNumbers[] = $currentNum;
        }
    }

    $question = implode(' ', $arrOfNumbers);

    return ['question' => $question, 'answer' => $answer];
}
