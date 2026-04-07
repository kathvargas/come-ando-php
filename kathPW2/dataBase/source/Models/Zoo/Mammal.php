<?php 
namespace Source\Models\Zoo;
class Mammal extends Animal{
   // Atributos
   private string $furColor;
   private int $gestationPeriod;
   
    public function __construct(int $id,string $name,string $species,string $habitat,float $weight,int $age,string $furColor,int $gestationPeriod)
    {
       parent::__construct($id,$name, $species,$habitat,$weight,$age);
         $this->furColor=$furColor;
        $this->gestationPeriod=$gestationPeriod;
    }
    //
    public function getFurColor(): ?string
    {
        return $this->furColor;
    }
    public function setFurColor(string $furColor):void{
        $this->furColor=$furColor;
    }
    public function getGestationPeriod(): ?int
    {
        return $this->gestationPeriod;
    }
    public function setGestationPeriod(int $gestationPeriod):void{
        $this->gestationPeriod=$gestationPeriod;
    }
    //
    public function breastfeed(): string{
        return "{$this->getName()} está amamentando seus filhotes. ";
    }


    public function show(): string{
         return parent::show()."Cor do pelo:{$this->getFurColor()} - 
         Período de Gestação: {$this->getGestationPeriod()}";
}
}
?>