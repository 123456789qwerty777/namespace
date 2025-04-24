<?php

require 'vendor/autoload.php';

use classes\Character;
use classes\Warrior;
use classes\Mage;
use classes\Archer;

$characters = [
    new Warrior('Воин', 100),
    new Mage('Маг', 80),
    new Archer('Лучник', 85),
];

foreach ($characters as $character) {
    $character->attack();
}
