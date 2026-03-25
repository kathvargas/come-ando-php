<?php

namespace Source\Models\Company;

use Source\Models\User;

class Employee extends User {
    private ?float $hoursWorked;
    private ?float $hourValue;

public function __construct(?int $id=null,?string $name=null,?string $email=null,?string $password=null,?string $photo=null,
?float $hoursWorked=null,?float $hourValue=null)
    {
        parent::__construct($id,$name, $email,$password,$photo);
        $this->hoursWorked=$hoursWorked;
        $this->hourValue=$hourValue;
    }
    public function getHoursWorked(): ?float
    {
        return $this->hoursWorked;
    }
    public function setHoursWorked(float $hoursWorked):void{
        $this->hoursWorked=$hoursWorked;
    }//

    public function getHourValue(): ?float
    {
        return $this->hourValue;
    }
    public function setHourValue(float $hourValue):void{
        $this->hourValue=$hourValue;
    }
    public function calculateSalary(): float{
        return ($this->hoursWorked)*($this->hourValue);
    }
    public function show(): string{
         return "Funcionário:{$this->getId()} - 
         Nome: {$this->getName()} 
         Email: {$this->getEmail()} 
         Horas Trabalhadas:{$this->getHoursWorked()}
         Valor da Hora:{$this->getHourValue()}
         Salário:{$this->calculateSalary()}" ;
    }

}
