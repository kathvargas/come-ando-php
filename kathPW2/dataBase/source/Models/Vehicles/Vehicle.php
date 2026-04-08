<?php 
namespace Source\Models\Vehicles;
class Vehicle{
   // Atributos
   private int $id;
   private string $brand;
   private string $model;
    private int $year;
   private string $fuelType;
   private float $mileage;
   private string $color;
   
    public function __construct(int $id,string $brand,string $model,int $year, string $fuelType, float $mileage,string $color)
    {
        $this->id=$id;
        $this->brand=$brand;
        $this->model=$model;
        $this->year=$year;
        $this->fuelType=$fuelType;
        $this->year=$year;
        $this->fuelType=$fuelType;
        $this->mileage=0.0;
        $this->color=$color;
    }
    //
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }
    public function setBrand(string $brand):void{
        $this->brand=$brand;
    }
    public function getModel(): string
    {
        return $this->model;
    }
    public function setModel(string $model):void{
        $this->model=$model;
    }
    public function getYear(): int
    {
        return $this->year;
    }
    public function setYear(int $year):void{
        $this->year=$year;
    }
    public function getFuelType(): string
    {
        return $this->fuelType;
    }
    public function setFuelType(string $fuelType):void{
        $this->fuelType=$fuelType;
    }
    public function getMileage(): float
    {
        return $this->mileage;
    }
    public function setMileage(float $mileage):void{
        $this->mileage=$mileage;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color):void{
        $this->color=$color;
    }
    public function refuel(): string {
        return "{$this->getBrand()} {$this->getModel()} está sendo abastecido com gasolina.";
    }
    public function drive(float $km): string {
        $this->mileage+=$km;
         $kmFormatado = number_format($km, 2, ',', '.');
    $milhasFormatadas = number_format($this->mileage, 2, ',', '.');
    
    return "{$this->getBrand()} 
    {$this->getModel()} percorreu {$kmFormatado} 
    km. Quilometragem atual: {$milhasFormatadas} km.";

    }


    //
    public function show(): string{
         return "ID #{$this->getId()}
         Nome: {{$this->getBrand()} {$this->getModel()} 
            Ano: {$this->getYear()} 
            Cor:{$this->getColor()}
            Combustivel:{$this->getFuelType()}
            Quilometragem:{$this->getMileage()}" ;
    }
}

?>