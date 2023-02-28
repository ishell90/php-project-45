<?php

namespace BrainGames\Games\gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_DESCRIPTION = "Find the greatest common divisor of given numbers.";

function findGcd()
{
    $questionsAndAnswers = [];
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
        $questionsAndAnswers[] = [$question, $correctAnswer];
    }
    runGame(GAME_DESCRIPTION, $questionsAndAnswers);
}
