<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Hello\hello;

use const BrainGames\Hello\ROUND_COUNT;

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function parityone()
{
    $game = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $rand = rand(0, 20);
        $proverka = $rand % 2;
        if ($proverka === 0) {
            $game[] = [$rand, 'yes'];
        } else {
            $game[] = [$rand, 'no'];
        }
    }
    hello(GAME_DESCRIPTION, $game);
}
