<?php

namespace BrainGames\Games\gcd;

use function cli\line;
use function cli\prompt;

function gcd()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("Find the greatest common divisor of given numbers.");
    for ($i = 0, $sum = 0; $sum < 3; $i++) {
        $randOne = rand(1, 100);
        $randTwo = rand(1, 100);
        if ($randOne === 1 || $randTwo === 1) {
            $test = '1';
        } else {
            for ($j = 0, $arr1 = [], $divider = 2, $first = $randOne; $first > 1; $j++) {
            $oneProverka = $first % $divider;
                if ($oneProverka === 0) {
                    $first = $first / $divider;
                    $arr1[] = $divider;
                    $divider = 2;
                } else {
                    $divider++;
                }
            }
            for ($z = 0, $arr2 = [], $divider2 = 2, $two = $randTwo; $two > 1; $z++) {
                $twoProverka = $two % $divider2;
                if ($twoProverka === 0) {
                    $two = $two / $divider2;
                    $arr2[] = $divider2;
                    $divider2 = 2;
                } else {
                    $divider2++;
                }
            }
            for ($k = 0, $math1 = count($arr1), $arr3 = []; $k < $math1; $k++) {
                if (in_array($arr1[$k], $arr2)) {
                    $arr3[] = $arr1[$k];
                    $m = array_search($arr1[$k], $arr2);
                    unset($arr2[$m]);
                }
            }
            $math2 = count($arr3);
            if ($math2 === 0) {
                $test = '1';
            } elseif ($math2 === 1) {
                $test = (string) $arr3[0];
            } elseif ($math2 > 1) {
                $test = (string) array_product($arr3);
            }
        }
        line("Question: {$randOne} {$randTwo}");
        $otvet = prompt('Your answer');
        if ($test === $otvet) {
            line('Correct!');
            $sum++;
        } else {
            line("{$otvet} is wrong answer ;(. Correct answer was {$test}.");
            line("Let's try again, {$name}!");
            break;
        }
        if ($sum === 3) {
            line("Congratulations, {$name}!");
            break;
        }
    }
}
