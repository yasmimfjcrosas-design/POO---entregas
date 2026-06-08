<?php

class Livro {
    private $titulo;
    private $autor;
    private $preco;

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setTitulo($titulo) {
        if (empty(trim($titulo))) {
            echo "Erro: título inválido.<br>";
            return;
        }
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        if (empty(trim($autor))) {
            echo "Erro: autor inválido.<br>";
            return;
        }
        $this->autor = $autor;
    }

    public function setPreco($preco) {
        if ($preco < 0) {
            echo "Erro: preço inválido.<br>";
            return;
        }
        $this->preco = $preco;
    }

    public function exibir() {
        return "Livro: $this->titulo | Autor: $this->autor | Preço: R$ $this->preco";
    }
}

$livro = new Livro();

$livro->setTitulo("Dom Casmurro");
$livro->setAutor("Machado de Assis");
$livro->setPreco(39.90);

echo $livro->exibir() . "<br>";

$livro->setPreco(-10); 
?>