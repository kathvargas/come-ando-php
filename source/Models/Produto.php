<?php
namespace Source\Models;
class Product{//objeto
    private ?int $id;
    private ?string $name;
    private ?float $price;

    //construtor
    public function __construct(int $id=null, string $name=null, float $price=null)
    {
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
    }
    //getters & setters
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }

       public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name):void{
        $this->name=$name;
    }

       public function getPrice(): ?float
    {
        return $this->price;
    }
    public function setPrice(float $price):void{
        $this->price=$price;
    }
//metodo pedido
    public function discount(float $percentual):void
    {
    if($percentual > 0 && $percentual <= 100){
        $this->price=$this->price - ($this->price*$percentual/100);
    }
    }//metodo para exibir produtos e preços
    public function show()
    {
        echo "Produtos:{$this->name} - Preço: R$" . number_format($this->price,2,',','.') . "<br>";
    }
}

?>
