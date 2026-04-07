<?php
require __DIR__ . '/source/autoload.php';

use source\Models\Zoo\Animal;
use source\Models\Zoo\Mammal;
use source\Models\Zoo\Bird;
use source\Models\Zoo\Reptile;

echo "<h1>Sistema de Animais</h1>";
echo "<h2>Mamíferos</h2>";
$lion = new Mammal(1, "Leão", "Panthera leo", "Savana", 190.00, 8, "Pelagem amarela", true);
$dolphin = new Mammal(2, "Golfinho", "Delphinus delphis", "Oceano", 150.00, 5, "Cinza", false);

echo "<h3>Leão</h3>";
echo "<p>" . $lion->show() . "</p>";
echo "<h3>Golfinho</h3>";
echo "<p>" . $dolphin->show() . "</p>";

echo "<h2>Aves</h2>";
$eagle = new Bird(3, "Águia", "Aquila chrysaetos", "Montanhas", 4.50, 12, 200.00, true);
$penguin = new Bird(4, "Pinguim", "Aptenodytes forsteri", "Antártida", 25.00, 8, 80.00, false);

echo "<h3>Águia</h3>";
echo "<p>" . $eagle->show() . "</p>";
echo "<h3>Pinguim</h3>";
echo "<p>" . $penguin->show() . "</p>";

echo "<h2>Réptil</h2>";
$snake = new Reptile(5, "Cobra", "Python reticulatus", "Floresta Tropical", 75.00, 4, "Escamas verdes", true);

echo "<h3>Cobra</h3>";
echo "<p>" . $snake->show() . "</p>";

echo "<h2>Comportamentos dos Animais</h2>";

echo "<h3>Leão</h3>";
echo "<p>" . $lion->eat() . "</p>";
echo "<p>" . $lion->sleep() . "</p>";
echo "<p>" . $lion->breastfeed() . "</p>";

echo "<h3>Golfinho</h3>";
echo "<p>" . $dolphin->eat() . "</p>";
echo "<p>" . $dolphin->sleep() . "</p>";
echo "<p>" . $dolphin->breastfeed() . "</p>";

echo "<h3>Águia</h3>";
echo "<p>" . $eagle->eat() . "</p>";
echo "<p>" . $eagle->sleep() . "</p>";
echo "<p>" . $eagle->sing() . "</p>";
echo "<p>" . $eagle->fly() . "</p>";

echo "<h3>Pinguim</h3>";
echo "<p>" . $penguin->eat() . "</p>";
echo "<p>" . $penguin->sleep() . "</p>";
echo "<p>" . $penguin->sing() . "</p>";
echo "<p>" . $penguin->fly() . "</p>";

echo "<h3>Cobra</h3>";
echo "<p>" . $snake->eat() . "</p>";
echo "<p>" . $snake->sleep() . "</p>";
echo "<p>" . $snake->shed() . "</p>";

echo "<h2>Atualização de Dados (Getters e Setters)</h2>";

echo "<h3>Antes da atualização - Leão</h3>";
echo "<p>Nome: " . $lion->getName() . "</p>";
echo "<p>Peso: " . $lion->getWeight() . " kg</p>";
echo "<p>Idade: " . $lion->getAge() . " anos</p>";

$lion->setName("Leão Africano");
$lion->setWeight(195.00);
$lion->setAge(9);

echo "<h3>Depois da atualização - Leão</h3>";
echo "<p>Nome: " . $lion->getName() . "</p>";
echo "<p>Peso: " . $lion->getWeight() . " kg</p>";
echo "<p>Idade: " . $lion->getAge() . " anos</p>";

echo "<h3>Antes da atualização - Pinguim</h3>";
echo "<p>Nome: " . $penguin->getName() . "</p>";
echo "<p>Envergadura: " . $penguin->getWingspan() . " cm</p>";
echo "<p>Pode voar: " . ($penguin->getCanFly() ? "Sim" : "Não") . "</p>";

$penguin->setName("Pinguim Imperador");
$penguin->setWingspan(85.00);

echo "<h3>Depois da atualização - Pinguim</h3>";
echo "<p>Nome: " . $penguin->getName() . "</p>";
echo "<p>Envergadura: " . $penguin->getWingspan() . " cm</p>";
echo "<p>Pode voar: " . ($penguin->getCanFly() ? "Sim" : "Não") . "</p>";

echo "<h2>Demonstração de Herança</h2>";
echo "<p>Leão (Mammal) executando eat() herdado de Animal: " . $lion->eat() . "</p>";
echo "<p>Águia (Bird) executando eat() herdado de Animal: " . $eagle->eat() . "</p>";
echo "<p>Cobra (Reptile) executando eat() herdado de Animal: " . $snake->eat() . "</p>";

echo "<h2>Ficha Técnica dos Animais</h2>";

echo "<h3>Leão</h3>";
echo "<p>" . $lion->show() . "</p>";

echo "<h3>Golfinho</h3>";
echo "<p>" . $dolphin->show() . "</p>";

echo "<h3>Águia</h3>";
echo "<p>" . $eagle->show() . "</p>";

echo "<h3>Pinguim</h3>";
echo "<p>" . $penguin->show() . "</p>";

echo "<h3>Cobra</h3>";
echo "<p>" . $snake->show() . "</p>";

echo "<h2>Animais Adicionais</h2>";

$tiger = new Mammal(6, "Tigre", "Panthera tigris", "Floresta Asiática", 220.00, 6, "Pelagem laranja com listras", true);
$parrot = new Bird(7, "Arara", "Ara ararauna", "Floresta Amazônica", 1.20, 15, 110.00, true);
$ostrich = new Bird(8, "Avestruz", "Struthio camelus", "Savana Africana", 120.00, 7, 200.00, false);
$lizard = new Reptile(9, "Lagarto", "Iguana iguana", "Floresta Tropical", 2.50, 3, "Escamas verdes", true);

echo "<h3>Tigre</h3>";
echo "<p>" . $tiger->show() . "</p>";
echo "<p>" . $tiger->eat() . "</p>";
echo "<p>" . $tiger->breastfeed() . "</p>";

echo "<h3>Arara</h3>";
echo "<p>" . $parrot->show() . "</p>";
echo "<p>" . $parrot->fly() . "</p>";
echo "<p>" . $parrot->sing() . "</p>";

echo "<h3>Avestruz</h3>";
echo "<p>" . $ostrich->show() . "</p>";
echo "<p>" . $ostrich->fly() . "</p>";

echo "<h3>Lagarto</h3>";
echo "<p>" . $lizard->show() . "</p>";
echo "<p>" . $lizard->shed() . "</p>";
?>