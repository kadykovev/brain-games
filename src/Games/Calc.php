<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\engine;

const RULES = "What is the result of the expression?";

function getRandomOperation()
{
    $randomNum = rand(1, 3);

    return $randomNum == 1 ? '*' : ($randomNum == 2 ? '+' : '-');
}

function runCalc(): void
{
    $generateGameData = function (): array {

        $operation = getRandomOperation();
        $num1 = rand(0, 25);
        $num2 = rand(0, 15);

        $question = '';
        $answer = '';

        switch ($operation) {
            case '*':
                $question = "{$num1} * {$num2}";
                $answer = $num1 * $num2;
                break;
            case '+':
                $question = "{$num1} + {$num2}";
                $answer = $num1 + $num2;
                break;
            case '-':
                $question = "{$num1} - {$num2}";
                $answer = $num1 - $num2;
                break;
        };

        return ['question' => $question, 'answer' => $answer];
    };

    engine($generateGameData, RULES);
}
