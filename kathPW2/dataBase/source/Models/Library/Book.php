<?php 
namespace Source\Models\Library;
class Book{
   // Atributos
   private int $id;
   private string $title;
   private string $isbn;
   private int $publishYear;
   private string $genre;
   private Author $author;
   private bool $available;
   
    public function __construct(int $id,string $title,string $isbn,int $publishYear,string $genre, Author $author, bool $available)
    {
        $this->id=$id;
        $this->title=$title;
        $this->isbn=$isbn;
        $this->publishYear=$publishYear;
        $this->genre=$genre;
        $this->author=$author;
        $this->available=true;
    }
    //
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title):void{
        $this->title=$title;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }
    public function setIsbn(string $isbn):void{
        $this->isbn=$isbn;
    }

    public function getPublishYear(): int
    {
        return $this->publishYear;
    }
    public function setPublishYear(int $publishYear):void{
        $this->publishYear=$publishYear;
    }
    public function getGenre(): string
    {
        return $this->genre;
    }
    public function setGenre(string $genre):void{
        $this->genre=$genre;
    }
    public function getAuthor(): Author
    {
        return $this->author;
    }
    public function setAuthor(Author $author):void{
        $this->author=$author;
    }
    public function getAvailable(): bool
    {
        return $this->available;
    }
    public function setAvailable(bool $available):void{
        $this->available=$available;
    }

    //
    public function show(): string{
         return "Livro:{$this->getId()}Nome: {$this->getTitle()} 
            ISNB: {$this->getIsbn()} 
            Genero:{$this->getGenre()}
            Ano:{$this->getPublishYear()}
            Author:{$this->getAuthor()}
            Disponivel:{$this->getAvailable()}" ;
    }
}

?>