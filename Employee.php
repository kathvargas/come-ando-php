<?php 
namespace Source\Models;
class Employee{
    private ?int $id;
    private ?string $name;
    private ?float $salary;

    public function __construct(int $id=null, string $name=null, float $salary=null)
    {
        $this->id=$id;
        $this->name=$name;
        $this->salary=$salary;
    }
    //
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }
    //
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name):void{
        $this->name=$name;
    }
    //
    public function getSalary(): ?float
    {
        return $this->salary;
    }
    public function setSalary(float $salary):void{
        $this->salary=$salary;
    }
    //começando metodos
    public function raise(float $percentual):void
    {
        if($percentual >0 && $percentual<=100)
        {
            $this->salary=$this->salary+($this->salary*$percentual/100);
        }
    }
    public function show()
    {
        echo "Funcionario:{$this->id} - Nome:{$this->name} - Salario: R$" . number_format($this->salary,2,',','.') . "<br>";
    }
}

?>
