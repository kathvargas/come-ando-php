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
   
    public function __construct(string $chassisCode=null,string $brand=null,string $model=null,int $year=null,float $basePrice=null,Owner $owner=null)
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

    public function getCpf(): ?string
    {
        return $this->cpf;
    }
    public function setCpf(string $cpf):void{
        $this->cpf=$cpf;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }
    public function setPhone(string $phone):void{
        $this->phone=$phone;
    }

    //
    public function show(): string{
         return "Proprietario:{$this->getId()} - 
         Nome: {$this->getName()} 
         CPF: {$this->getCpf()} 
        Telefone:{$this->getPhone()}" ;
    }
}

?>