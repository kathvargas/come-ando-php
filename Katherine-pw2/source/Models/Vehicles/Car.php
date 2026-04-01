<?php 
namespace Source\Models\Vehicles;
class Car extends Vehicle{
   // Atributos
  
   private ?int $doors;
    private ?string $fuelType;
  
   
    public function __construct(?string $chassisCode=null,?string $brand=null,?string $model=null,?int $year=null,?float $basePrice=null,?Owner $owner=null,?string $doors=null,?string $fuelType=null)
    {
        parent::__construct($chassisCode,$brand, $model,$year,$basePrice,$owner);
        $this->doors=$doors;
        $this->fuelType=$fuelType;
    }
    //
    public function getDoors(): ?int
    {
        return $this->doors;
    }
    public function setDoors(int $doors):void{
        $this->doors=$doors;
    }
    public function getFueltype(): ?string
    {
        return $this->fuelType;
    }
    public function setFueltype(string $fuelType):void{
        $this->fuelType=$fuelType;
    }
    public  function calculateTax(): float{
        return parent::getBaseprice()*0.15;
    }
    public  function show(): string{
        return parent::show()."-Imposto:{$this->calculateTax()}-Portas:{$this->doors}-Gasolina:{$this->fuelType}";
    }

}