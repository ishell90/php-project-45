<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Hello\hello;

use const BrainGames\Hello\GAME_WIN;

const QUESTION = "Answer 'yes' if the number is even, otherwise answer 'no'.";

function parityone()
{
    $game = [];
    for ($i = 0; $i < GAME_WIN; $i++) {
        $rand = rand(0, 20);
        $proverka = $rand % 2;
        if ($proverka === 0) {
            $game[] = [$rand, 'yes'];
        } else {
            $game[] = [$rand, 'no'];
        }
    }
    hello(QUESTION, $game);
}
