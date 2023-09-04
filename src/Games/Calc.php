<?php

namespace BrainGames\Games\Calc;

const RULES = "What is the result of the expression?";

function calc(): array
{
    $rules = "What is the result of the expression?";
    $operation = rand(1, 3);
    $num1 = rand(0, 25);
    $num2 = rand(0, 15);

    switch ($operation) {
        case 1:
            $question = "{$num1} * {$num2}";
            $answer = $num1 * $num2;
            break;
        case 2:
            $question = "{$num1} + {$num2}";
            $answer = $num1 + $num2;
            break;
        case 3:
            $question = "{$num1} - {$num2}";
            $answer = $num1 - $num2;
            break;
    }

    return ['question' => $question, 'answer' => $answer];
}
