<?php 
namespace Source\Models\Vehicles;
class Owner{
   // Atributos
   private ?int $id;
   private ?string $name;
   private ?string $cpf;
   private ?string $phone;
   
    public function __construct(?int $id=null,?string $name=null,?string $cpf=null,?string $phone=null)
    {
        $this->id=$id;
        $this->name=$name;
        $this->cpf=$cpf;
        $this->phone=$phone;
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