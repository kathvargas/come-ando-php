<?php 
namespace Source\Models\Library;
class Author{
   // Atributos
   private ?int $id;
   private ?string $name;
   private ?string $nationality;
   private ?string $birthYear;
   
    public function __construct(?int $id=null,?string $name=null,?string $nationality=null,?string $birthYear=null)
    {
        $this->id=$id;
        $this->name=$name;
        $this->nationality=$nationality;
        $this->birthYear=$birthYear;
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

    public function getNationality(): ?string
    {
        return $this->nationality;
    }
    public function setNationality(string $nationality):void{
        $this->nationality=$nationality;
    }

    public function getBirthYear(): ?string
    {
        return $this->birthYear;
    }
    public function setBirthYear(string $birthYear):void{
        $this->birthYear=$birthYear;
    }

    //
    public function show(): string{
         return "Nome: {$this->getName()} 
            Nationality: {$this->getNationality()} 
            BirthYear:{$this->getBirthYear()}" ;
    }
}

?>