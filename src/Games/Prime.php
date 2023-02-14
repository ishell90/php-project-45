<?php

namespace BrainGames\Games\prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Hello\hello;

use const BrainGames\Hello\GAME_WIN;

const QUESTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

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
    $game = [];
    for ($i = 0; $i < GAME_WIN; $i++) {
        $randNumber = rand(2, 100);
        $test = isPrime($randNumber) ? 'yes' : 'no';
        $game[] = [$randNumber, $test];
    }
    hello(QUESTION, $game);
}
