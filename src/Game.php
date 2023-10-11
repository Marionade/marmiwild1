<?php
require_once 'Fighter.php';

class Game
{
    private Fighter $fighter1;
    private Fighter $fighter2;

    public function __construct(Fighter $fighter1 = new Fighter('🧔 Héraclès', 20, 6),
                                Fighter $fighter2 = new Fighter('🦁 Lion de Némée', 11, 13))
    {
        $this->fighter1 = $fighter1;
        $this->fighter2 = $fighter2;
    }

    public function run() {
        // TODO
        $this->fight();
    }

    private function fight() {
        $round = 0;
        while ($this->fighter1->isAlive() && $this->fighter2->isAlive()) {
            $round += 1;
            echo '🕛 ' . $round . PHP_EOL;
            $this->fighter1->fight($this->fighter2);
            $this->fighter2->fight($this->fighter1);
            echo $this->fighter1->getName() . '[' . $this->fighter1->getLife() . ']' . PHP_EOL;
            echo $this->fighter2->getName() . '[' . $this->fighter2->getLife() . ']' . PHP_EOL;
        }

        $this->gameOver();
    }

    private function gameOver() {
        echo PHP_EOL;
        if ($this->fighter1->getLife() === 0) {
            echo $this->fighter2->getName() . ' a gagné !! 🏆🏆🏆🏆🏆' .PHP_EOL;
        } else {
            echo $this->fighter1->getName() . ' a gagné !! 🏆🏆🏆🏆🏆' .PHP_EOL;
        }
    }
}
