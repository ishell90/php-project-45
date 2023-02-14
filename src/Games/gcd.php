<?php

namespace BrainGames\Games\gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Hello\hello;

use const BrainGames\Hello\GAME_WIN;

const QUESTION = "Find the greatest common divisor of given numbers.";

function gcd()
{
    $game = [];
    for ($i = 0; $i < GAME_WIN; $i++) {
        $randOne = rand(1, 100);
        $randTwo = rand(1, 100);
        if ($randOne === 1 || $randTwo === 1) {
            $test = '1';
        } else {
            $arr1 = [];
            for ($j = 0, $divider = 2, $first = $randOne; $first > 1; $j++) {
                $oneProverka = $first % $divider;
                if ($oneProverka === 0) {
                    $first = $first / $divider;
                    $arr1[] = $divider;
                    $divider = 2;
                } else {
                    $divider++;
                }
            }
            $arr2 = [];
            for ($z = 0, $divider2 = 2, $two = $randTwo; $two > 1; $z++) {
                $twoProverka = $two % $divider2;
                if ($twoProverka === 0) {
                    $two = $two / $divider2;
                    $arr2[] = $divider2;
                    $divider2 = 2;
                } else {
                    $divider2++;
                }
            }
            $arr3 = [];
            for ($k = 0, $math1 = count($arr1); $k < $math1; $k++) {
                if (in_array($arr1[$k], $arr2, true)) {
                    $arr3[] = $arr1[$k];
                    $m = array_search($arr1[$k], $arr2, true);
                    unset($arr2[$m]);
                }
            }
            $math2 = count($arr3);
            if ($math2 === 0) {
                $test = '1';
            } elseif ($math2 === 1) {
                $test = (string) $arr3[0];
            } else {
                $test = (string) array_product($arr3);
            }
        }
        $question = "{$randOne} {$randTwo}";
        $game[] = [$question, $test];
    }
    hello(QUESTION, $game);
}
