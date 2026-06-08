<?php

class Funcionario {
    private $nome;
    private $cargo;
    private $salario;

    
    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getSalario() {
        return $this->salario;
    }

   
    public function setNome($nome) {
        if (empty(trim($nome))) {
            echo "Erro: nome inválido.<br>";
            return;
        }
        $this->nome = $nome;
    }

    public function setCargo($cargo) {
        if (empty(trim($cargo))) {
            echo "Erro: cargo inválido.<br>";
            return;
        }
        $this->cargo = $cargo;
    }

    public function setSalario($salario) {
        if ($salario < 0) {
            echo "Erro: salário inválido.<br>";
            return;
        }
        $this->salario = $salario;
    }

    public function exibir() {
        return "Funcionário: $this->nome | Cargo: $this->cargo | Salário: R$ $this->salario";
    }
}


$funcionario = new Funcionario();

$funcionario->setNome("Carlos Silva");
$funcionario->setCargo("Analista");
$funcionario->setSalario(3500);

echo $funcionario->exibir() . "<br>";

$funcionario->setSalario(-500);
?>