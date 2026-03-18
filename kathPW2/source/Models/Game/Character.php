<?php
namespace Source\Models\Game;
class Character{
   // Atributos
   private ?string $name;
   private ?int $life;
   private ?int $mana;
   private ?int $strength;
   
    public function __construct(string $name=null, int $life=null, int $mana=null, int $strength=null)
    {
        $this->name=$name;
        $this->life=$life;
        $this->mana=$mana;
        $this->strength=$strength;
    }
    //
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name):void{
        $this->name=$name;
    }

    public function getLife(): ?int
    {
        return $this->life;
    }
    public function setLife(int $life):void{
        $this->life=$life;
    }

public function getMana(): ?int
    {
        return $this->mana;
    }
    public function setMana(int $mana):void{
        $this->mana=$mana;
    }

public function getStrength(): ?int
    {
        return $this->strength;
    }
    public function setStrength(int $strength):void{
        $this->strength=$strength;
    }

public function describe():string {
        return "Name: {$this->getName()} 
        Life: {$this->getLife()} 
        Mana: {$this->getMana()} 
        Strength: {$this->getStrength()}";
    }
}



