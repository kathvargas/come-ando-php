<?php
namespace Source\Models;
class Order{//objeto
    private ?int $id;
    private ?string $costumerName;
    private ?float $total;

    //construtor
    public function __construct(int $id=null, string $costumerName=null, float $total=null)
    {
        $this->id=$id;
        $this->costumerName=$costumerName;
        $this->total=$total;
    }
    //getters & setters
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }

       public function getCostumerName(): ?string
    {
        return $this->costumerName;
    }
    public function setCostumerName(string $costumerName):void{
        $this->costumerName=$costumerName;
    }

       public function getTotal(): ?float
    {
        return $this->total;
    }
    public function setTotal(float $total):void{
        $this->total=$total;
    }
//metodo que adiciona um acrescimo
    public function addFee(float $percentual):void
    {
    if($percentual > 0 && $percentual <= 100){
        $this->total=$this->total + ($this->total*$percentual/100);
    }
    }//metodo para exibir produtos e preços
    public function show()
    {
        echo "Pedido:{$this->id} - Cliente:{$this->costumerName} - Preço: R$" . number_format($this->total,3,',','.') . "<br>";
    }
}

?>
