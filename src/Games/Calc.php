<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Hello\hello;

use const BrainGames\Hello\GAME_WIN;

const QUESTION = "What is the result of the expression?";

function calculation()
{
    $game = [];
    for ($i = 0; $i < GAME_WIN; $i++) {
        $randOne = rand(1, 30);
        $randTwo = rand(1, 30);
        $randInSigns = rand(0, 2);
        $signs = array('+', '-', '*');

        if ($signs[$randInSigns] === '+') {
            $question = "{$randOne} + {$randTwo}";
            $test = (string) ($randOne + $randTwo);
            $game[] = [$question, $test];
        } elseif ($signs[$randInSigns] === '-') {
            $question = "{$randOne} - {$randTwo}";
            $test = (string) ($randOne - $randTwo);
            $game[] = [$question, $test];
        } else {
            $question = "{$randOne} * {$randTwo}";
            $test = (string) ($randOne * $randTwo);
            $game[] = [$question, $test];
        }
    }
    hello(QUESTION, $game);
}
