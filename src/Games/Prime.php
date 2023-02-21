<?php

namespace BrainGames\Games\prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Hello\runGame;

use const BrainGames\Hello\ROUND_COUNT;

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

function prime()
{
    $aGame = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $randNumber = rand(2, 100);
        $correctAnswer = isPrime($randNumber) ? 'yes' : 'no';
        $aGame[] = [$randNumber, $correctAnswer];
    }
    runGame(GAME_DESCRIPTION, $aGame);
}
