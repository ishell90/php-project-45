<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_DESCRIPTION = "What is the result of the expression?";

function runCalculation()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $randOne = rand(1, 30);
        $randTwo = rand(1, 30);
        $signs = ['+', '-', '*'];
        $randSign = $signs[array_rand($signs)];
        switch ($randSign) {
            case '+':
                $question = "{$randOne} + {$randTwo}";
                $correctAnswer = (string) ($randOne + $randTwo);
                $questionsAndAnswers[] = [$question, $correctAnswer];
                break;
            case '-':
                $question = "{$randOne} - {$randTwo}";
                $correctAnswer = (string) ($randOne - $randTwo);
                $questionsAndAnswers[] = [$question, $correctAnswer];
                break;
            case '*':
                $question = "{$randOne} * {$randTwo}";
                $correctAnswer = (string) ($randOne * $randTwo);
                $questionsAndAnswers[] = [$question, $correctAnswer];
                break;
        }
    }
    runGame(GAME_DESCRIPTION, $questionsAndAnswers);
}
