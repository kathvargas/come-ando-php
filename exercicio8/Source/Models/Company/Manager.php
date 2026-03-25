<?php
namespace Source\Models\Company;
use Source\Models\Company\Employee;

class Manager extends Employee {
    private ?float $bonus;

public function __construct(?int $id=null,?string $name=null,?string $email=null,?string $password=null,?string $photo=null,
?float $hoursWorked=null,?float $hourValue=null,?float $bonus=null)
    {
        parent::__construct($id,$name, $email,$password,$photo,$hoursWorked,$hourValue);
        $this->bonus=$bonus;
    }
    public function getBonus(): ?float
    {
        return $this->bonus;
    }
    public function setBonus(float $bonus):void{
        $this->bonus=$bonus;
    }

    public function calculateSalary(): float
    {

        return parent::calculateSalary()+$this->getBonus();
    }

    public function show(): string{
         return "Vendedor:{$this->getId()} - 
         Nome: {$this->getName()} 
         Email: {$this->getEmail()} 
         Horas Trabalhadas:{$this->getHoursWorked()}
         Valor da Hora:{$this->getHourValue()}
         Salário base:{parent::calculateSalary()}
         Bonus:{$this->getBonus()}
         Salário Total:{$this->calculateSalary()}" ;
    }

}