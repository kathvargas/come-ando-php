<?php

require __DIR__ . "/../source/autoload.php";


use Source\Models\Game\Wizard;
use Source\Models\Game\Warrior;
use Source\Models\Game\Thief;

echo "<h1>Kingdoms War</h1>";
echo "<hr>";

$warrior = new Warrior(
    name: "Thorgrim",
    life: 120,
    mana: 30,
    strength: 15,
    defense: 10
);
echo "<p>".$warrior->describe()."</p>";

$wizard = new Wizard(
    name: "Harry",
    life: 120,
    mana: 30,
    strength: 15,
    intelligence:50
);
echo "<p>".$wizard->describe()."</p>";

$thief = new Thief(
    name: "Lara",
    life: 120,
    mana: 30,
    strength: 15,
    agility: 10
);
echo "<p>".$thief->describe()."</p>";