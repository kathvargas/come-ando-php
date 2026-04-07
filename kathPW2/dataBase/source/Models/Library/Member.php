<?php 
namespace Source\Models\Library;
class Member{
   // Atributos
   private ?int $id;
   private ?string $name;
   private ?string $email;
   private ?string $registrationDate;
   
    public function __construct(?int $id=null,?string $name=null,?string $email=null,?string $registrationDate=null)
    {
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->registrationDate=$registrationDate;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setEmail(string $email):void{
        $this->email=$email;
    }

    public function getRegistrationDate(): ?string
    {
        return $this->registrationDate;
    }
    public function setRegistrationDate(string $registrationDate):void{
        $this->registrationDate=$registrationDate;
    }

    //
    public function show(): string{
         return "Membro:{$this->getId()} - 
         Nome: {$this->getName()} 
         Email: {$this->getEmail()} 
        Data de registro:{$this->getRegistrationDate()}" ;
    }
}

?>