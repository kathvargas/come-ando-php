<?php
namespace Source\Models\Game;
class Warrior extends Character{
    private  ?int $defense;

    public function __construct(string $name=null, int $life=null, int $mana=null, int $strength=null, int $defense=null)
    {
        parent::__construct($name, $life,$mana,$strength);
        $this->defense=$defense;
    }
    public function getDefense(): ?int
    {
        return $this->defense;
    }
    public function setDefense(int $defense):void{
        $this->defense=$defense;
    }
    //metodo
    public function describe(): string {
        return parent::describe() . "  Especialidade: $this->defense";
}
}