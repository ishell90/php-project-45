<?php

namespace BrainGames\Games\progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Hello\hello;

use const BrainGames\Hello\GAME_WIN;

const QUESTION = "What number is missing in the progression?";

function progression()
{
    $game = [];
    for ($i = 0; $i < GAME_WIN; $i++) {
        $randStart = rand(0, 30);
        $randProfile = rand(1, 3);
        $randReplacement = rand(0, 9);
        $arr = [];
        $arr2 = [];
        for ($j = 0, $sum1 = 0; $sum1 < 10; $j++) {
            if ($randProfile === 1) {
                $result = $randStart + ($j * 3);
                $arr[] = $result;
                $sum1++;
            } elseif ($randProfile === 2) {
                $result = $randStart + ($j * 5);
                $arr[] = $result;
                $sum1++;
            } else {
                $result = $randStart + ($j * 7);
                $arr[] = $result;
                $sum1++;
            }
        }
        $memory = (string) ($arr[$randReplacement]);
        $arr[$randReplacement] = "..";
        $finish = implode(" ", $arr);
        $game[] = [$finish, $memory];
    }
    hello(QUESTION, $game);
}
