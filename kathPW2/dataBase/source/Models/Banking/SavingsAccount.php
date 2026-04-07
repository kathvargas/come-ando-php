<?php 
namespace Source\Models\Banking;
class SavingsAccount extends BankAccount{
   private float $yieldRate;
   private string $lastYieldDate;
   
    public function __construct(int $id, string $ownerName, string $accountNumber, string $pin, float $yieldRate)
    {
        parent::__construct($id, $ownerName, $accountNumber, $pin);
        
        $this->yieldRate = $yieldRate;
        $this->lastYieldDate = date('Y-m-d'); 
    }
    //
    public function getYieldRate(): float
    {
        return $this->yieldRate;
    }
     public function setYieldRate(float $yieldRate): void
    {
        $this->yieldRate = $yieldRate;
    }

    public function getLastYieldDate(): string
    {
        return $this->lastYieldDate;
    }
    public function setLastYieldDate(string $lastYieldDate): void
    {
        $this->lastYieldDate = $lastYieldDate;
    }

    //
    public function applyYield(): float
    {
        $currentBalance = $this->getBalance();
        $yieldAmount = $currentBalance * ($this->yieldRate / 100);
        
        $this->deposit($yieldAmount, "Rendimento aplicado ({$this->yieldRate}%)");
        
        $this->lastYieldDate = date('Y-m-d');
        
        return $yieldAmount;
    }
    public function show(): string
    {
        $balanceFormatted = 'R$ ' . number_format($this->getBalance(), 2, ',', '.');
        
        $yieldRateFormatted = number_format($this->yieldRate, 2, ',', '.') . '% ao mês';
        
        return "Conta Poupança: #{$this->getId()}<br>" .
               "Titular: {$this->getOwnerName()}<br>" .
               "Número da Conta: {$this->getAccountNumber()}<br>" .
               "Saldo: {$balanceFormatted}<br>" .
               "Taxa de Rendimento: {$yieldRateFormatted}<br>" .
               "Último Rendimento: {$this->lastYieldDate}<br>" .
               "Transações registradas: " . count($this->getTransactions());
    }
}

?>