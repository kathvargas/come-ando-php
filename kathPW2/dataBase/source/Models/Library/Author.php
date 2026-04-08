<?php 
namespace Source\Models\Library;
class Author{
   // Atributos
   private int $id;
   private string $name;
   private string $nationality;
   private string $birthYear;
   private string $biography;
   
    public function __construct(int $id,string $name,string $nationality,string $birthYear, string $biography)
    {
        $this->id=$id;
        $this->name=$name;
        $this->nationality=$nationality;
        $this->birthYear=$birthYear;
        $this->biography=$biography;
    }
    //
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name):void{
        $this->name=$name;
    }

    public function getNationality(): string
    {
        return $this->nationality;
    }
    public function setNationality(string $nationality):void{
        $this->nationality=$nationality;
    }

    public function getBirthYear(): string
    {
        return $this->birthYear;
    }
    public function setBirthYear(string $birthYear):void{
        $this->birthYear=$birthYear;
    }

public function getBiography(): string
    {
        return $this->biography;
    }
    public function setBiography(string $biography):void{
        $this->biography=$biography;
    }

    //
    public function show(): string{
         return "ID #{$this->getId()}Nome: {$this->getName()} 
            Nationality: {$this->getNationality()} 
            BirthYear:{$this->getBirthYear()}
            Biography:{$this->getBiography()}" ;
    }
}

?>