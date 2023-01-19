<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function parityone()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $sum = 0;
    for($i = 0; $sum < 4; $i++) {
    $rand = rand(0, 100);
    line("Question: {$rand}");
    $proverka = $rand % 2;
    
    }
}
