<?php 
namespace Source\Models\Payment;
class CreditCardPayment extends Payment{
    private string $cardLastDigits;
    private int $installments;
    private float $feeRate;
    public function __construct(int $id,float $amount,string $description, string $cardLastDigits,int $installments, float $feeRate )
    {
        parent::__construct($id,$amount, $description);
        $this->cardLastDigits=$cardLastDigits;
        $this->installments=$installments;
        $this->feeRate=$feeRate;
    }
    public function calculateFree(): float
    {
        return parent::calculateFree();
    }
}
