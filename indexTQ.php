<?php

require __DIR__ . "/source/Models/Faq/Type.php";
require __DIR__ . "/source/Models/Faq/Question.php";

use Source\Models\Faq\Type;
use Source\Models\Faq\Question;
echo "<h1>Teste da Classe Type e Question</h1>";
echo "<hr>";
//instancia o objeto
$type= new Type();
var_dump($type);
//
$question= new Question();
var_dump($question);
//atribuindo valores ao objeto
$type1= new Type(1,"Inscriçoes");
 echo $type1->show();

$type2= new Type(2,"Sobre o evento");
 echo $type2->show();

$question1= new Question(101,"Como faço para me inscrever?","Acessando o site oficial",$type1);
echo $question1->showFaq();

$question2= new Question(102,"Qual a data do evento?","Vai ser xx/xx",$type2);
echo $question2->showFaq();

$question2->setQuestion('Quando será realizada a MOCITEC?');
$question2->setAnswer('A MOCITEC ocorre anualmente em outubro. Consulte o site para as datas exatas.');
echo $question2->showFaq();
