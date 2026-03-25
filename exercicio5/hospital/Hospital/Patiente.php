<?php
namespace Source\Models\Hospital;
class Patient extends User{
    private  ?string $birthDate;
     private  ?string $medicalRecord;

    public function __construct(int $id=null,string $name=null, string $email=null, string $senha=null, string $birthDate=null, string $medicalRecord=null)
    {
        parent::__construct($id,$name, $email,$senha);
        $this->birthDate=$birthDate;
        $this->medicalRecord=$medicalRecord;
    }
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }
    public function setBirthdate(string $birthDate):void{
        $this->birthDate=$birthDate;
    }
      public function getMedicalRecord(): ?string
    {
        return $this->medicalRecord;
    }
    public function setMedicalRecord(string $medicalRecord):void{
        $this->medicalRecord=$medicalRecord;
    }
    //metodo
    public function show(): string {
        return parent::show() . " BirthDate: $this->birthDate - MedicalRecord: $this->medicalRecord";
}
}
