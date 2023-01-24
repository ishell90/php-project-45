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
    for($i = 0, $sum = 0; $sum < 3;$i++) {
        $randOne = rand(1, 20);
        $randTwo = rand(1, 20);
        $test = (string)(gmp_gcd($randOne, $randTwo));
        line("Question: {$randOne} {$randTwo}");
        $otvet = prompt('Your answer');
        if ($test === $otvet) {
            line('Correct!');
            $sum++;
        } else {
            line("{$otvet} is wrong answer ;(. Correct answer was {$test}.");
            line("Let's try again, {$name}");
            break;
        }
        if ($sum === 3) {
            line("Congratulations, {$name}!");
            break;
        }
    }
}