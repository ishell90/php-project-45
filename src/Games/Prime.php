<?php

namespace BrainGames\Games\prime;

use function cli\line;
use function cli\prompt;

function prime()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for($i = 0, $sum = 0; $sum < 4; $i++) {
        $randNumber = rand(2, 100);
        for($j = 2, $sum1 = 0; $j <= $randNumber; $j++) {
            $test = $randNumber % $j;
            if ($test === 0) {
                $sum1++;
            }
        }
        line("Question: {$randNumber}");
        $otvet = prompt('Your answer');
        if ($sum1 === 1) {
            if ($otvet === 'yes') {
                line('Correct!');
                $sum++;
            } else {
                line("'no' is wrong answer ;(. Correct answer was 'yes'.");
                line("Let's try again, {$name}!");
                break;
            }
        } else {
            if ($otvet === 'no') {
                line('Correct!');
                $sum++;
            } else {
                line("'yes' is wrong answer ;(. Correct answer was 'no'.");
                line("Let's try again, {$name}");
                break;
            }
        }
        if ($sum === 3) {
            line("Congratulations, {$name}!");
            break;
        }
    }
}