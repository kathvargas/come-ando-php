<?php 
namespace Source\Models\Library;
class Library{
   // Atributos
   private int $id;
   private string $name;
   private string $adress;
   private array $books;
   
    public function __construct(int $id,string $name,string $adress)
    {
        $this->id=$id;
        $this->name=$name;
        $this->adress=$adress;
        $this->books=[];
        
    }
    //
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name):void{
        $this->name=$name;
    }

    public function getAdress(): string
    {
        return $this->adress;
    }
    public function setAdress(string $adress):void{
        $this->adress=$adress;
    }
    public function getBooks(): array
    {
        return $this->books;
    }
    
    public function addBook(Book $book): void
    {
        $this->books[]=$book;
    }
    public function removeBook(int $bookId): bool
    {
        foreach($this->books as $key=>$book){
            if($book->getId()===$bookId){
                unset($this->books[$key]);
                return true;
            }
        }
        return false;
    }
    public function findByTitle(string $title): ?Book
    {
        foreach($this->books as $book){
            if(stripos($book->getTitle(),$title)!==false){
                return $book;
            }
        }
        return null;
    }
    public function getAvailableBooks(): array
    {
        $avaliableBooks=[];
        foreach($this->books as $book){
            if($book->isAvailable()){
                $avaliableBooks[]= $book;
            }
        }
        return $avaliableBooks;
    }


    //
    public function show(): string{
        $totalBooks=count($this->books);
        $avaliableBooks=count($this->getAvailableBooks());
         return "Biblioteca :{$this->getId()}Nome: {$this->getName()} 
            Endereço : {$this->getAdress()} 
            Total de Livros:{$totalBooks}
            Disponivel:{$avaliableBooks}" ;
    }
}

?>