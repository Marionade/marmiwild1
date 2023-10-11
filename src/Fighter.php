<?php
//require_once 'utils.php';

/* Fighter class definition */
class Fighter
{
    private const MAX_LIFE = 100;

    private string $name;
    private int $strength;
    private int $dexterity;
    private int $life;

    public function __construct(string $name, int $strength, int $dexterity)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->life = self::MAX_LIFE;
        echo $this->name . ' ready to fight [' . $this->life . '/' .  self::MAX_LIFE . ']' . PHP_EOL;
    }

    public function fight(Fighter $figther) {
        if (!$this->isAlive()) {
            return;
        }
        $deg = rand(1, $this->strength) - $figther->getDexterity();
        if ($deg <= 0) {
            echo $this->name . ' rate son attaque 😂😂😂'. PHP_EOL;
        } else {
            $figther->setLife($figther->getLife() - $deg);
            echo $this->name . ' attaque ' . $figther->getName() . ' --> Inflige ' . $deg . ' dégat' . PHP_EOL;
        }
    }

    public function isAlive(): bool {
        return $this->life > 0;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function getDexterity(): int
    {
        return $this->dexterity;
    }

    public function getLife(): int
    {
        return $this->life;
    }

    private function setLife(int $life)
    {
        if ($life < 0 ) {
            $this->life = 0;
        } elseif ($life > self::MAX_LIFE) {
            $this->life = self::MAX_LIFE;
        }  else {
            $this->life = $life;
        }
    }

}