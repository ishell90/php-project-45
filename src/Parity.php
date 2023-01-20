<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function parityone()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for($i = 0, $sum = 0; $sum < 3; $i++) {
    $rand = rand(0, 20);
    line("Question: {$rand}");
    $proverka = $rand % 2;
    $otvet = prompt('Your answer');
        if ($proverka === 0) {
            if ($otvet === 'yes') {
                line('Correct!');
                $sum++;
            } else {
                line("'no' is wrong answer ;(. Correct answer was 'yes'.");
                line("Let's try again, {$name}!");
                break;
            }
        } elseif ($proverka === 1) {
            if ($otvet === 'no') {
                line('Correct!');
                $sum++;
            } else {
                line("'yes' is wrong answer ;(. Correct answer was 'no'.");
                line("Let's try again, {$name}!");
                break;
            }
        }
        if ($sum === 3) {
            line("Congratulations, {$name}!");
        }
    }
}
