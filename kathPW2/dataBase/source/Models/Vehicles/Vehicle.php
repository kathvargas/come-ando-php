<?php 
namespace Source\Models\Vehicles;
class Vehicle{
   // Atributos
   private ?string $chassisCode;
   private ?string $brand;
   private ?string $model;
   private ?int $year;
   private ?float $basePrice;
   private ?Owner $owner;
   
    public function __construct(?string $chassisCode=null,?string $brand=null,?string $model=null,?int $year=null,?float $basePrice=null,?Owner $owner=null)
    {
        $this->chassisCode=$chassisCode;
        $this->brand=$brand;
        $this->model=$model;
        $this->year=$year;
        $this->basePrice=$basePrice;
        $this->owner=$owner;
    }
    //
    public function getChassisCode(): ?string
    {
        return $this->chassisCode;
    }
    public function setChassisCode(int $chassisCode):void{
        $this->chassisCode=$chassisCode;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }
    public function setBrand(string $brand):void{
        $this->brand=$brand;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }
    public function setModel(string $model):void{
        $this->model=$model;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }
    public function setYear(int $year):void{
        $this->year=$year;
    }
    public function getBaseprice(): ?float
    {
        return $this->basePrice;
    }
    public function setBaseprice(float $basePrice):void{
        $this->basePrice=$basePrice;
    }
    public function getOwner(): ?Owner
    {
        return $this->owner;
    }
    public function setOwner(Owner $owner):void{
        $this->owner=$owner;
    }


    //
    public  function calculateTax(): float{
        return 0;
    }

    public function show(): string{
         return "Veiculo:{$this->getBrand()} -{$this->getModel()}-{$this->getYear()} 
         Codigo de chassi: {$this->getChassiscode()} 
         Valor base: {$this->getBaseprice()} 
        Proprietario:{$this->getOwner()->getName()}" ;
    }
}

?>