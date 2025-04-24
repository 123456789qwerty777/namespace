<?php

namespace classes;

class Mage extends Character
{
    public function attack(): void
    {
        echo "Mage {$this->name} casts a spell" . PHP_EOL;
    }
}
