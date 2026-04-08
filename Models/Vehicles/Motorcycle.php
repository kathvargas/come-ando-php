<?php 
namespace Source\Models\Vehicles;
class Motorcycle extends Vehicle{
   // Atributos
   private int $engineCC;
 private bool $hasSidecar;
   
    public function __construct(int $id,string $brand,string $model,int $year, string $fuelType, float $mileage,string $color,int $doors,int $engineCC,bool $hasSidecar)
    {
        parent::__construct($id,$brand, $model,$year,$fuelType,$mileage,$color);
        $this->engineCC=$engineCC;
        $this->hasSidecar=$hasSidecar;
    }
    //
    public function getEngineCC(): int
    {
        return $this->engineCC;
    }
    public function setEngineCC(int $engineCC):void{
        $this->engineCC=$engineCC;
    }
    public function getHasSidecar(): bool
    {
        return $this->hasSidecar;
    }
    public function setHasSidecar(bool $hasSidecar):void{
        $this->hasSidecar=$hasSidecar;
    }
    public function wheelie(): string {
        if ($this->engineCC >= 600) {
            return "{$this->getBrand()} {$this->getModel()} está fazendo um wheeling!";
        } else {
            return "{$this->getBrand()} {$this->getModel()} não tem potência para wheeling.";
        }
    }
    
       public function show(): string {
        // Formata a quilometragem (vindo do pai) com duas casas decimais
        $mileageFormatted = number_format($this->getMileage(), 2, ',', '.');
        
        // Define "Sim" ou "Não" para sidecar
        $sidecarText = $this->hasSidecar ? "Sim" : "Não";
        
        return "Motocicleta (Motorcycle): #{$this->getId()} - {$this->getBrand()} {$this->getModel()}\n" .
               "Ano (Year): {$this->getYear()}\n" .
               "Cor (Color): {$this->getColor()}\n" .
               "Combustível (Fuel Type): {$this->getFuelType()}\n" .
               "Quilometragem (Mileage): {$mileageFormatted} km\n" .
               "Cilindrada (Engine Displacement): {$this->engineCC} CC\n" .
               "Sidecar: {$sidecarText}";
    }

}