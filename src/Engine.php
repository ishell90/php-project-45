<?php

namespace BrainGames\Hello;

use function cli\line;
use function cli\prompt;

const GAME_WIN = 3;

function hello(string $question, array $game)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);
    foreach ($game as [$questionGame, $questionGood]) {
        line("Question: {$questionGame}");
        $otvet = prompt('Your answer');
        if ($otvet === $questionGood) {
            line('Correct!');
        } else {
            line("'{$otvet}' is wrong answer ;(. Correct answer was '{$questionGood}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
