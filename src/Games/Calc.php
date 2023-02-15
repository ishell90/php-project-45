<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Hello\hello;

use const BrainGames\Hello\ROUND_COUNT;

const GAME_DESCRIPTION = "What is the result of the expression?";

function calculation()
{
    $game = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $randOne = rand(1, 30);
        $randTwo = rand(1, 30);
        $signs = (array) ['+', '-', '*'];
        $randSign = array_rand($signs, 1);
        switch ($randSign) {
            case 0:
                $question = "{$randOne} + {$randTwo}";
                $correctAnswer = (string) ($randOne + $randTwo);
                $game[] = [$question, $correctAnswer];
                break;
            case 1:
                $question = "{$randOne} - {$randTwo}";
                $correctAnswer = (string) ($randOne - $randTwo);
                $game[] = [$question, $correctAnswer];
                break;
            case 2:
                $question = "{$randOne} * {$randTwo}";
                $correctAnswer = (string) ($randOne * $randTwo);
                $game[] = [$question, $correctAnswer];
                break;
        }
    }
    hello(GAME_DESCRIPTION, $game) ;
}
