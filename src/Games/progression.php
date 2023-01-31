<?php

namespace BrainGames\Games\progression;

use function cli\line;
use function cli\prompt;

function progression()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("What number is missing in the progression?");
    for($i = 0, $sum = 0; $sum < 3; $i++) {
        $randStart = rand(0, 30);
        $randProfile = rand(1, 3);
        $randReplacement = rand(0, 9);
        $arr = [];
        $arr2 = [];
        #var_dump($randProfile);
        #var_dump($randStart);
        for($j = 0, $sum1 = 0; $sum1 < 10; $j++) {
            if ($randProfile === 1) {
                $result = $randStart + ($j * 3);
                $arr[] = $result;
                $sum1++;
                #var_dump($result);
            } elseif ($randProfile === 2) {
                $result = $randStart + ($j * 5);
                $arr[] = $result;
                $sum1++;
            } elseif ($randProfile === 3) {
                $result = $randStart + ($j * 7);
                $arr[] = $result;
                $sum1++;
            }
        }
        
        $memory = (string) ($arr[$randReplacement]);
        $arr[$randReplacement] = "..";
        $finish = implode(" ", $arr);
        line("Question: {$finish}");
        $otvet = prompt('Your answer');
        if ($memory === $otvet) {
            line('Correct!');
            $sum++;
        } else {
            line("{$otvet} is wrong answer ;(. Correct answer was {$memory}.");
            line("Let's try again, {$name}!");
            break;
        }
        if ($sum === 3) {
            line("Congratulations, {$name}!");
            break;
        }
    }
}