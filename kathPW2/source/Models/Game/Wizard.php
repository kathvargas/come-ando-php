<?php
namespace Source\Models\Game;
class Wizard extends Character{
    private  ?int $intelligence;

    public function __construct(string $name=null, int $life=null, int $mana=null, int $strength=null, int $intelligence=null)
    {
        parent::__construct($name, $life,$mana,$strength);
        $this->intelligence=$intelligence;
    }
    public function getIntelligence(): ?int
    {
        return $this->intelligence;
    }
    public function setIntelligence(int $intelligence):void{
        $this->intelligence=$intelligence;
    }
    public function describe(): string {
        return parent::describe() . "  Especialidade: $this->intelligence";
}
}