<?php 
namespace Source\Models\Zoo;
class Animal{
   // Atributos
   private int $id;
   private string $name;
   private string $species;
   private string $habitat;
   private float $weight;
   private int $age;
   
    public function __construct(int $id,string $name,string $species,string $habitat,float $weight,int $age)
    {
        $this->id=$id;
        $this->name=$name;
        $this->species=$species;
        $this->habitat=$habitat;
         $this->weight=$weight;
        $this->age=$age;
    }
    //
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name):void{
        $this->name=$name;
    }

    public function getSpecies(): ?string
    {
        return $this->species;
    }
    public function setSpecies(string $species):void{
        $this->species=$species;
    }

    public function getHabitat(): ?string
    {
        return $this->habitat;
    }
    public function SetHabitat(string $habitat):void{
        $this->habitat=$habitat;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }
    public function setWeight(float $weight):void{
        $this->weight=$weight;
    }
    public function getAge(): ?int
    {
        return $this->age;
    }
    public function setAge(int $age):void{
        $this->age=$age;
    }
    //
    public function eat(): string{
        return "{$this->getName()} está se alimentando. ";
    }
    public function sleep(): string{
        return "{$this->getName()} está se dormindo. ";
    }

    public function show(): string{
         return "Animal:{$this->getId()} - 
         Nome: {$this->getName()} 
         Especie: {$this->getSpecies()} 
          Habitat:{$this->getHabitat()}
         Peso: {$this->getWeight()} 
          Idade:{$this->getAge()}" ;
    }
}

?>