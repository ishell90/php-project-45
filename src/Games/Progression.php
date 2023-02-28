<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_DESCRIPTION = "What number is missing in the progression?";

function createProgression()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $randStart = rand(0, 30);
        $randProfile = rand(1, 3);
        $randReplacement = rand(0, 9);
        $subsequence = [];
        for ($j = 0, $numberCount = 0; $numberCount < 10; $j++) {
            if ($randProfile === 1) {
                $result = $randStart + ($j * 3);
                $subsequence[] = $result;
                $numberCount++;
            } elseif ($randProfile === 2) {
                $result = $randStart + ($j * 5);
                $subsequence[] = $result;
                $numberCount++;
            } else {
                $result = $randStart + ($j * 7);
                $subsequence[] = $result;
                $numberCount++;
            }
        }
        $memory = (string) ($subsequence[$randReplacement]);
        $subsequence[$randReplacement] = "..";
        $finish = implode(" ", $subsequence);
        $questionsAndAnswers[] = [$finish, $memory];
    }
    runGame(GAME_DESCRIPTION, $questionsAndAnswers);
}
