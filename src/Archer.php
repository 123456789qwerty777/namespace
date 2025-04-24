<?php

namespace classes;

class Archer extends Character
{
    public function attack(): void
    {
        echo "Archer {$this->name} shoots a bow";
    }
}
