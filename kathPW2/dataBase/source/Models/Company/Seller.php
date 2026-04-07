<?php
namespace Source\Models\Company;
use Source\Models\Company\Employee;

class Seller extends Employee {
    private ?float $totalSales;

public function __construct(?int $id=null,?string $name=null,?string $email=null,?string $password=null,?string $photo=null,
?float $hoursWorked=null,?float $hourValue=null,?float $totalSales=null)
    {
        parent::__construct($id,$name, $email,$password,$photo,$hoursWorked,$hourValue);
        $this->totalSales=$totalSales;
    }
    public function getTotalSales(): ?float
    {
        return $this->totalSales;
    }
    public function setTotalSales(float $totalSales):void{
        $this->totalSales=$totalSales;
    }

    public function calculateCommission(): float{
        return $this->totalSales*0.10;
    }

    public function calculateSalary(): float
    {

        return parent::calculateSalary()+$this->calculateCommission();
    }

    public function show(): string{
         return "Vendedor:{$this->getId()} - 
         Nome: {$this->getName()} 
         Email: {$this->getEmail()} 
         Horas Trabalhadas:{$this->getHoursWorked()}
         Valor da Hora:{$this->getHourValue()}
         Salário base:{parent::calculateSalary()}
         Total de vendas:{$this->getTotalSales()}
         Comissao:{$this->calculateCommission()}
         Salário Total:{$this->calculateSalary()}" ;
    }

}