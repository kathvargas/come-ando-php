<?php
namespace Source\Models\Hospital;
class User{
   // Atributos
   private ?int $id;
   private ?string $name;
   private ?string $email;
   private ?string $senha;
   
   
    public function __construct(int $id=null,string $name=null, string $email=null, string $senha=null){
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->senha=$senha;
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
     public function getSenha(): ?string
    {
        return $this->senha;
    }
    public function setSenha(string $senha):void{
        $this->senha=$senha;
    }
//

public function show():string {
        return "Usuario: {$this->getId()} 
        Name: {$this->getName()} 
        Email: {$this->getEmail()} ";
    }

}
