<?php 
namespace Source\Models\Vehicles;
class Motorcycle extends Vehicle{
   // Atributos
  
   private ?int $displacement;
  
   
    public function __construct(?string $chassisCode=null,?string $brand=null,?string $model=null,?int $year=null,?float $basePrice=null,?Owner $owner=null,?string $displacement=null)
    {
        parent::__construct($chassisCode,$brand, $model,$year,$basePrice,$owner);
        $this->displacement=$displacement;
    }
    //
    public function getDisplacement(): ?int
    {
        return $this->displacement;
    }
    public function setDisplacement(int $displacement):void{
        $this->displacement=$displacement;
    }
    public  function calculateTax(): float{
        return parent::getBaseprice()*0.05;
    }
     public  function show(): string{
        return parent::show()."-Imposto:{$this->calculateTax()}-Portas:{$this->displacement}";
    }

}