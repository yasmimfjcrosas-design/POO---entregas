<?php

class Aluno 
{
    public $nome;
    public $matricula;
    public $nota1;
    public $nota2;

    public function calcularMedia() 
    {
        return ($this->nota1 + $this->nota2) / 2;
    }
}

$aluno1 = new Aluno();

$aluno1->nome = "Mariana Tavares";
$aluno1->matricula = "1234537";
$aluno1->nota1 = 6;
$aluno1->nota2 = 10;

echo "Aluno: {$aluno1->nome} | Média: " . $aluno1->calcularMedia();

?>