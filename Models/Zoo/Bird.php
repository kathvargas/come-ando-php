<?php 
namespace Source\Models\Zoo;
class Bird extends Animal{
   // Atributos
   private float $wingspan;
   private bool $canFly;
   
    public function __construct(int $id,string $name,string $species,string $habitat,float $weight,int $age,float $wingspan,bool $canFly)
    {
       parent::__construct($id,$name, $species,$habitat,$weight,$age);
         $this->wingspan=$wingspan;
        $this->canFly=$canFly;
    }
    //
    public function getWingspan(): ?float
    {
        return $this->wingspan;
    }
    public function setWingspan(float $wingspan):void{
        $this->wingspan=$wingspan;
    }
    public function getCanFly(): ?bool
    {
        return $this->canFly;
    }
    public function setCanFly(bool $canFly):void{
        $this->canFly=$canFly;
    }
    //
    public function sing(): string{
        return "{$this->getName()} está cantando.";
    }
    public function fly(): string{
        if($this->canFly){
        return "{$this->getName()} está voando.";}
        else{
            return "{$this->getName()} não consegue voar.";
        }
    }

    public function show(): string{
         return parent::show()."Envergadura:{$this->getWingspan()} - 
         Voa: {$this->getCanFly()}";
}
}
?>