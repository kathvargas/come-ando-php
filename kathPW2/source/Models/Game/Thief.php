<?php
namespace Source\Models\Game;
class Thief extends Character{
    private  ?int $agility;

    public function __construct(string $name=null, int $life=null, int $mana=null, int $strength=null, int $agility=null)
    {
        parent::__construct($name, $life,$mana,$strength);
        $this->agility=$agility;
    }
    public function getAgility(): ?int
    {
        return $this->agility;
    }
    public function setAgility(int $agility):void{
        $this->agility=$agility;
    }
    public function describe(): string {
        return parent::describe() . "  Especialidade: $this->agility";
}
}