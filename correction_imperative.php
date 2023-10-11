<?php
require_once 'src/Fighter.php';


$heracles = new Fighter('🧔 Héraclès', 20, 6);
$lion = new Fighter('🦁 Lion de Némée', 11, 13);


$round = 0;
while ($heracles->isAlive() && $lion->isAlive()) {
    $round += 1;
    echo '🕛 ' . $round . PHP_EOL;
    $heracles->fight($lion);
    $lion->fight($heracles);
    echo $heracles->getName() . '[' . $heracles->getLife() . ']' . PHP_EOL;
    echo $lion->getName() . '[' . $lion->getLife() . ']' . PHP_EOL;
}

echo PHP_EOL;

if ($heracles->getLife() === 0) {
    echo $lion->getName() . ' a gagné !! 🏆🏆🏆🏆🏆' .PHP_EOL;
} else {
    echo $heracles->getName() . ' a gagné !! 🏆🏆🏆🏆🏆' .PHP_EOL;
}

