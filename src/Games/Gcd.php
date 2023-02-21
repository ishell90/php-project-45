<?php

namespace BrainGames\Games\gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Hello\runGame;

use const BrainGames\Hello\ROUND_COUNT;

const GAME_DESCRIPTION = "Find the greatest common divisor of given numbers.";

function gcd()
{
    $game = [];
    for ($j = 0; $j < ROUND_COUNT; $j++) {
        $randOne = rand(1, 100);
        $randTwo = rand(1, 100);
        $oneNumber = $randOne;
        $twoNumber = $randTwo;
        while ($oneNumber != $twoNumber) {
            if ($oneNumber > $twoNumber) {
                $oneNumber = $oneNumber - $twoNumber;
            } else {
                $twoNumber = $twoNumber - $oneNumber;
            }
        }
        $correctAnswer = (string) $twoNumber;
        $question = "{$randOne} {$randTwo}";
        $game[] = [$question, $correctAnswer];
    }
    runGame(GAME_DESCRIPTION, $game);
}
