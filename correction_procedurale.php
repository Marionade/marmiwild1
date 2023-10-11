<?php
require_once 'src/Fighter.php';

//First Labour : Heracles vs Nemean Lion
// use your Figher class here
function battezvous(Fighter $fighter1, Fighter $fighter2) : void {
    $round = 0;
    while ($fighter1->isAlive() && $fighter2->isAlive()) {
        $round += 1;
        echo '🕛 ' . $round . PHP_EOL;
        $fighter1->fight($fighter2);
        $fighter2->fight($fighter1);
        echo $fighter1->getName() . '[' . $fighter1->getLife() . ']' . PHP_EOL;
        echo $fighter2->getName() . '[' . $fighter2->getLife() . ']' . PHP_EOL;
    }

    gameOver($fighter1, $fighter2);
}

function gameOver(Fighter $fighter1, Fighter $fighter2) : void {
    echo PHP_EOL;
    if ($fighter1->getLife() === 0) {
        echo $fighter2->getName() . ' a gagné !! 🏆🏆🏆🏆🏆' .PHP_EOL;
    } else {
        echo $fighter1->getName() . ' a gagné !! 🏆🏆🏆🏆🏆' .PHP_EOL;
    }

}


$heracles = new Fighter('🧔 Héraclès', 20, 6);
$lion = new Fighter('🦁 Lion de Némée', 11, 13);
battezvous($heracles, $lion);