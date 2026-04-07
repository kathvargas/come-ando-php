<?php

require __DIR__ . "/../source/autoload.php";


use Source\Models\Hospital\Doctor;
use Source\Models\Hospital\Patient;

echo "<h1>Hospital </h1>";
echo "<hr>";

$patient = new Patient(
    id:1,
    name: "kath",
    email:"kath@gmail",
    senha:"1234",
    birthDate:"09062008",
    medicalRecord:"ahufhaeoifioeqajof"
);
echo "<p>".$patient->show()."</p>";

$patient2 = new Patient(
    id:2,
    name: "lucas",
    email:"lucas@gmail",
    senha:"1234",
    birthDate:"09062007",
    medicalRecord:"ahufhaeoifioeqajof"
);
echo "<p>".$patient2->show()."</p>";

$doctor = new Doctor(
    id:1,
    name: "joao",
    email:"joao@gmail",
    senha:"1234",
    crm:127634876,
    speciality:"Clinico geral"
);
echo "<p>".$doctor->show()."</p>";

$doctor2 = new Doctor(
    id:3,
    name: "jef",
    email:"jef@gmail",
    senha:"1234",
    crm:9237659,
    speciality:"Dentista"
);
echo "<p>".$doctor2->show()."</p>";

$doctor2->setId(2);
$doctor2->setName("Pedro");
echo $doctor2->show();