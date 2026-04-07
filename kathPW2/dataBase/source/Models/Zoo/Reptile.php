<?php 
namespace Source\Models\Zoo;
class Reptile extends Animal{
   // Atributos
    private bool $isVenomous;
   private string $scaleType;
   
    public function __construct(int $id,string $name,string $species,string $habitat,float $weight,int $age,bool $isVenomous,string $scaleType)
    {
       parent::__construct($id,$name, $species,$habitat,$weight,$age);
         $this->isVenomous=$isVenomous;
        $this->scaleType=$scaleType;
    }
    //
    public function getIsVenomous(): ?bool
    {
        return $this->isVenomous;
    }
    public function setIsVenomous(bool $isVenomous):void{
        $this->isVenomous=$isVenomous;
    }
    public function getScaleType(): ?string
    {
        return $this->scaleType;
    }
    public function setScaleType(string $scaleType):void{
        $this->scaleType=$scaleType;
    }
    //
    public function shed(): string{
        return "{$this->getName()} está trocando de pele.";
    }

    public function show(): string{
         return parent::show()."Venenoso:{$this->getIsVenomous()} - 
         Tipo de escamas: {$this->getScaleType()}";
}
}
?>