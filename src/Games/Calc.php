<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;

function calculation()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("What is the result of the expression?");
    for($i = 0, $sum = 0; $sum < 4; $i++) {
        $randOne = rand(1, 30);
        $randTwo = rand(1, 30);
        $randInSigns = rand(0, 2);
        $signs = array('+', '-', '*');
        line("Question: {$randOne} {$signs[$randInSigns]} {$randTwo}");
        $otvet = prompt('Your answer');

            if ($signs[$randInSigns] === '+') {
                $test = (string) ($randOne + $randTwo);
            } elseif ($signs[$randInSigns] === '-') {
                $test = (string) ($randOne - $randTwo);
            } elseif ($signs[$randInSigns] === '*') {
                $test = (string) ($randOne * $randTwo);
            }

            if ($otvet === $test) {
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