<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}

function runPrime()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $randNumber = rand(2, 100);
        $correctAnswer = isPrime($randNumber) ? 'yes' : 'no';
        $questionsAndAnswers[] = [$randNumber, $correctAnswer];
    }
    runGame(GAME_DESCRIPTION, $questionsAndAnswers);
}
