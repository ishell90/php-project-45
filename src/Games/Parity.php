<?php

namespace BrainGames\Games\Parity;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isParity()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $rand = rand(0, 20);
        $parity = $rand % 2;
        if ($parity === 0) {
            $questionsAndAnswers[] = [$rand, 'yes'];
        } else {
            $questionsAndAnswers[] = [$rand, 'no'];
        }
    }
    runGame(GAME_DESCRIPTION, $questionsAndAnswers);
}
