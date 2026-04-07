<?php
namespace Source\Models\Hospital;
class Doctor extends User{
    private  ?int $crm;
     private  ?string $speciality;

    public function __construct(int $id=null,string $name=null, string $email=null, string $senha=null, int $crm=null, string $speciality=null)
    {
        parent::__construct($id,$name, $email,$senha);
        $this->crm=$crm;
        $this->speciality=$speciality;
    }
    public function getCrm(): ?int
    {
        return $this->crm;
    }
    public function setCrm(int $crm):void{
        $this->crm=$crm;
    }
      public function getSpeciality(): ?string
    {
        return $this->speciality;
    }
    public function setSpeciality(string $speciality):void{
        $this->speciality=$speciality;
    }
    //metodo
    public function show(): string {
        return parent::show() . " CRM: $this->crm - Especialidade: $this->speciality";
}
}