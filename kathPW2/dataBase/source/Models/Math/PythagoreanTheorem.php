<?php
namespace Source\Models\Math;
class PythagoreanTheorem{
   private ?float $cathetusA;
   private ?float $cathetusB;
   private ?float $hypotenuse;
   
    public function __construct(float $cathetusA,float $cathetusB)
    {
        $this->cathetusA=$cathetusA;
        $this->cathetusB=$cathetusB;
        $this->hypotenuse=0;
    }
    //
    public function getCathetusA(): ?float
    {
        return $this->cathetusA;
    }
    public function setCathetusA(float $cathetusA):void{
        $this->cathetusA=$cathetusA;
    }

    public function getCathetusB(): ?float
    {
        return $this->cathetusB;
    }
    public function setCathetusB(float $cathetusB):void{
        $this->cathetusB=$cathetusB;
    }

    public function getHypotenuse(): ?float
    {
        return $this->hypotenuse;
    }
    public function setHypotenuse(float $hypotenuse):void{
        $this->hypotenuse=$hypotenuse;
    }

    public function calculate(): void
    {
       $this->hypotenuse=sqrt(pow($this->cathetusA,2)+pow($this->cathetusB,2));
    }

    public function show(): string
    {
        return "teorema de pitagoras<br>".
        "Cateto A:{$this->cathetusA}<br>".
        "Cateto B:{$this->cathetusB}<br>".
        "Hipotenusa:". number_format($this->hypotenuse,2)."<br>";
    }
}