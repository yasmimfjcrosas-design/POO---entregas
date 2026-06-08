<?php

class Aluno {
    private $nome;
    private $matricula;
    private $nota;

  
    public function getNome() {
        return $this->nome;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getNota() {
        return $this->nota;
    }

    public function setNome($nome) {
        if (empty(trim($nome))) {
            echo "Erro: nome inválido.<br>";
            return;
        }
        $this->nome = $nome;
    }

    public function setMatricula($matricula) {
        if (empty(trim($matricula))) {
            echo "Erro: matrícula inválida.<br>";
            return;
        }
        $this->matricula = $matricula;
    }

    public function setNota($nota) {
        if ($nota < 0 || $nota > 10) {
            echo "Erro: nota inválida.<br>";
            return;
        }
        $this->nota = $nota;
    }

    public function exibir() {
        return "Aluno: $this->nome | Matrícula: $this->matricula | Nota: $this->nota";
    }
}


$aluno = new Aluno();

$aluno->setNome("Maria Souza");
$aluno->setMatricula("2025001");
$aluno->setNota(8.5);

echo $aluno->exibir() . "<br>";

$aluno->setNota(15);
?>