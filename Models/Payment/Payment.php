<?php 
namespace Source\Models\Payment;
class Payment{
   // Atributos
   private int $id;
   private float $amount;
   private string $status;
   private string $description ;
   private string $createdAt;
   
    public function __construct(int $id,float $amount,string $description )
    {
        $this->id=$id;
        $this->amount=$amount;
        $this->status="pendente";
        $this->description=$description;
         $this->createdAt = date('Y-m-d H:i:s');
    }
    //
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }
    public function setAmount(string $amount):void{
        $this->amount=$amount;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
    public function setStatus(string $status):void{
        $this->status=$status;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description):void{
        $this->description=$description;
    }
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    public function setCreatedAt(string $createdAt):void{
        $this->createdAt=$createdAt;
    }
    
    //
    public function calculateFree(): float{
        return 0.0;
    }
    public function process(): string{
        $this->status="aprovado";
        return "pagamento: {$this->getId()} processado com sucesso.";
    }

    public function show(): string{
        $fee = $this->calculateFree();
        $total = $this->amount + $fee;

    return "Pagamento: #{$this->getId()}\n" .
           "Descrição: {$this->getDescription()}\n" .
           "Valor: R$ " . number_format($this->getAmount(), 2, ',', '.') . "\n" .
           "Taxa: R$ " . number_format($fee, 2, ',', '.') . "\n" .
           "Valor Total: R$ " . number_format($total, 2, ',', '.') . "\n" .
           "Status: {$this->getStatus()}";
    }
}

?>