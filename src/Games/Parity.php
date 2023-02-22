<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Hello\runGame;

use const BrainGames\Hello\ROUND_COUNT;

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function parityone()
{
    $aGame = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $rand = rand(0, 20);
        $parity = $rand % 2;
        if ($parity === 0) {
            $aGame[] = [$rand, 'yes'];
        } else {
            $aGame[] = [$rand, 'no'];
        }
    }
    runGame(GAME_DESCRIPTION, $aGame);
}
