<?php

namespace classes;

class Character
{
    public string $name;
    public int $health;

    public function __construct(string $name, int $health)
    {
        $this->name = $name;
        $this->health = $health;
    }

    public function attack(): void
    {
        echo "Character attacks" . PHP_EOL;
    }
}
