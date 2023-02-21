<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Hello\runGame;

use const BrainGames\Hello\ROUND_COUNT;

const GAME_DESCRIPTION = "What is the result of the expression?";

function calculation()
{
    $aGame = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $randOne = rand(1, 30);
        $randTwo = rand(1, 30);
        $signs = ['+', '-', '*'];
        $randSign = $signs[array_rand($signs)];
        switch ($randSign) {
            case '+':
                $question = "{$randOne} + {$randTwo}";
                $correctAnswer = (string) ($randOne + $randTwo);
                $aGame[] = [$question, $correctAnswer];
                break;
            case '-':
                $question = "{$randOne} - {$randTwo}";
                $correctAnswer = (string) ($randOne - $randTwo);
                $aGame[] = [$question, $correctAnswer];
                break;
            case '*':
                $question = "{$randOne} * {$randTwo}";
                $correctAnswer = (string) ($randOne * $randTwo);
                $aGame[] = [$question, $correctAnswer];
                break;
        }
    }
    runGame(GAME_DESCRIPTION, $aGame);
}
