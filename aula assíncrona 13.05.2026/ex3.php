<?php

class Retangulo {
    public $largura;
    public $altura;

    public function Area() {
        return $this->largura * $this->altura;
    }

    public function Perimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

$retangulo1 = new Retangulo();

$retangulo1->largura = 5;
$retangulo1->altura = 3;

echo "Retângulo: {$retangulo1->largura}cm x {$retangulo1->altura}cm";
echo " | Área: " . $retangulo1->Area() . " cm²";
echo " | Perímetro: " . $retangulo1->Perimetro() . " cm";

?>