<?php 
namespace Source\Models\Vehicles;
class Car extends Vehicle{
   // Atributos
  
   private int $doors;
    private int $passengers;
    private float $trunkCapacity ;
  
   
    public function __construct(int $id,string $brand,string $model,int $year, string $fuelType, float $mileage,string $color,int $doors,int $passengers,float $trunkCapacity)
    {
        parent::__construct($id,$brand, $model,$year,$fuelType,$mileage,$color);
        $this->doors=$doors;
        $this->passengers=$passengers;
        $this->trunkCapacity=$trunkCapacity;
    }
    //
    public function getDoors(): int
    {
        return $this->doors;
    }
    public function setDoors(int $doors):void{
        $this->doors=$doors;
    }
    public function getPassengers(): int
    {
        return $this->passengers;
    }
    public function setPassengers(int $passengers):void{
        $this->passengers=$passengers;
    }
    public function getTtrunkCapacity(): float
    {
        return $this->trunkCapacity;
    }
    public function setTrunkCapacity(float $trunkCapacity):void{
        $this->trunkCapacity=$trunkCapacity;
    }
    public function openTrunk(): string {
        $capacidadeFormatada = number_format($this->trunkCapacity, 2, ',', '.');
        return "O porta-malas do{$this->getBrand()} {$this->getModel()}foi aberto.
        Capacidade: {$capacidadeFormatada} Litros.";
    }
    
    public  function show(): string{
        $capacidadeFormatada = number_format($this->trunkCapacity, 2, ',', '.');
        return parent::show()."-Portas:{$this->getDoors()}
        -Passageiros:{$this->getPassengers()}
        -Gasolina:{$capacidadeFormatada}";
    }

}