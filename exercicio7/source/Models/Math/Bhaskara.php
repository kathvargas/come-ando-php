<?php
namespace Source\Models\Math;

class Bhaskara{
   private ?float $a;
   private ?float $b;
   private ?float $c;
   private ?float $discriminant;
   private ?float $root1;
   private ?float $root2;
   
    public function __construct(float $a,float $b,float $c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
        $this->discriminant=null;
        $this->root1=null;
        $this->root2=null;

    }
    //
    public function getA(): ?float
    {
        return $this->a;
    }
    public function setA(float $a):void{
        $this->a=$a;
    }
     public function getB(): ?float
    {
        return $this->b;
    }
    public function setB(float $b):void{
        $this->b=$b;
    }
     public function getC(): ?float
    {
        return $this->c;
    }
    public function setC(float $c):void{
        $this->c=$c;
    }
    //
     public function getDiscriminant(): ?float
    {
        return $this->discriminant;
    }
    public function setDiscriminant(float $discriminant):void{
        $this->discriminant=$discriminant;
    }
    //
     public function getRoot1(): ?float
    {
        return $this->root1;
    }
    public function setRoot1(float $root1):void{
        $this->root1=$root1;
    }
     public function getRoot2(): ?float
    {
        return $this->root2;
    }
    public function setRoot2(float $root2):void{
        $this->root2=$root2;
    }

    public function calculate(): void{
        $this->discriminant = ($this->b ** 2) - (4 * $this->a * $this->c);

        if($this->discriminant<0){
            $this->root1=null;
            $this->root2=null;
        }elseif($this->discriminant==0){
            $this->root1=-$this->b/(2*$this->a);
            $this->root2=$this->root1;
        }else{
            $sqrtDelta = sqrt($this->discriminant);
            $this->root1 = (-$this->b + $sqrtDelta) / (2 * $this->a);
            $this->root2 = (-$this->b - $sqrtDelta) / (2 * $this->a);
        }
    }
        public function show(): string
    {
        $output = "Fórmula de Báskara\n";
        $output .= "Coeficiente a: {$this->a}<br>";
        $output .= "Coeficiente b: {$this->b}<br>";
        $output .= "Coeficiente c: {$this->c}<br>";
        $output .= "Discriminante Δ: " . number_format($this->discriminant, 2) . "<br>";

        if ($this->discriminant < 0) {
            $output .= "A equação não possui solução real.<br>";
        } elseif ($this->discriminant == 0) {
            $output .= "Raiz única: " . number_format($this->root1, 2) . "<br>";
        } else {
            $output .= "Raiz 1 : " . number_format($this->root1, 2) . "<br>";
            $output .= "Raiz 2 : " . number_format($this->root2, 2) . "<br>";
        }

        return $output;

    }
}
