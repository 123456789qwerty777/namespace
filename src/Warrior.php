<?php

namespace classes;

class Warrior extends Character
{
    public function attack(): void
    {
        echo "Warrior {$this->name} strikes with a sword" . PHP_EOL;
    }
}
