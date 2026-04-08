<?php 
namespace Source\Models\Library;
class Loan{
   // Atributos
   private int $id;
   private Book $book;
   private string $borrowerName;
   private string $loanDate;
   private string $dueDate;
   private ?string $returnDate ;
   private string $status;
   
   
    public function __construct(int $id,Book $book,string $borrowerName,string $loanDate,string $dueDate,?string $returnDate=null,string $status)
    {
        $this->id=$id;
        $this->book=$book;
        $this->borrowerName=$borrowerName;
        $this->loanDate=$loanDate;
        $this->dueDate=$dueDate;
        $this->returnDate=$returnDate;
        $this->status="ativo";
        
    }
    //
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }

    public function getBook(): Book
    {
        return $this->book;
    }
    public function setBook(Book $book):void{
        $this->book=$book;
    }
    
    public function getBName(): string
    {
        return $this->borrowerName;
    }
    public function setBName(string $borrowerName):void{
        $this->borrowerName=$borrowerName;
    }
    public function getLoanDate(): string
    {
        return $this->loanDate;
    }
    public function setLoanDate(string $loanDate):void{
        $this->loanDate=$loanDate;
    }
    public function getDueDate(): string
    {
        return $this->dueDate;
    }
    public function setDueDate(string $dueDate):void{
        $this->dueDate=$dueDate;
    }
    public function getReturnDate(): string
    {
        return $this->returnDate;
    }
    public function setReturnDate(string $returnDate):void{
        $this->returnDate=$returnDate;
    }
    public function getStatus(): string
    {
        return $this->status;
    }
    public function setStatus(string $status):void{
        $this->status=$status;
    }

    
    
    public function returnBook(string $returnDate): bool
    {
        $this->returnDate=$returnDate;
        if($this->returnDate>$this->dueDate){
            $this->status="atrasado";
        } else{
            $this->status="devolvido";
        }
        $this->book->setAvailable(true);
        return true;
    }


    //
    public function show(): string{
         return "Emprestimo :{$this->getId()}
         Livro: {$this->getBook()->getTitle()} 
        Usuario : {$this->getBName()} 
        Data do Empréstimo:{$this->getLoanDate()} 
        Devolução Prevista:{$this->getDueDate()} 
        Devolução Efetiva:{$this->getReturnDate()} 
        Situação:{$this->getStatus()} " ;
    }
}

?>