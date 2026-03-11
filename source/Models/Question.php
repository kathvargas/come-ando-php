<?php
namespace Source\Models\Faq;
class Question{
   // Atributos
   private ?int $id;
   private ?string $question;
   private ?string $answer;
   private ?Type $type;

    public function __construct(int $id=null,string $question=null,string $answer=null,Type $type=null)
    {
        $this->id=$id;
        $this->question=$question;
        $this->answer=$answer;
        $this->type=$type;
    }
    //get id
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }
    //get question
    public function getQuestion(): ?string
    {
        return $this->question;
    }
    public function setQuestion(string $question):void{
        $this->question=$question;
    }
    //get answer
    public function getAnswer(): ?string
    {
        return $this->answer;
    }
    public function setAnswer(string $answer):void{
        $this->answer=$answer;
    }
    //get type
    public function getType(): ?Type
    {
        return $this->type;
    }
    public function setType(Type $type):void{
        $this->type=$type;
    }
    //
    public function showFaq(): string{
        $typeName=$this->type ? $this->type->getName():'Sem categoria';
        $output= "FAQ #{$this->id}<br>";
        $output.= "Categoria: {$typeName}<br>";
        $output.= "Pergunta: {$this->question}<br>";
        $output.= "Resposta: {$this->answer}<br>";
        return $output;
    }
}
?>
