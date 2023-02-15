<?php

namespace BrainGames\Hello;

use function cli\line;
use function cli\prompt;

const ROUND_COUNT = 3;

function hello(string $question, array $game)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);
    foreach ($game as [$questionGame, $answerGood]) {
        line("Question: {$questionGame}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer === $answerGood) {
            line('Correct!');
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answerGood}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
