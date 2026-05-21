<?php

class Livro
 {
    public $titulo;
    public $autor;
    public $numerodepag;
    public $preco;

    public function exibir() 
    {
        return "{$this->titulo} de {$this->autor} | {$this->numerodepag} páginas | R$ {$this->preco}";
    }
}

$livro1 = new Livro();

$livro1->titulo = "Quinze Dias";
$livro1->autor = "Vitor Martins";
$livro1->numerodepag = 207;
$livro1->preco = 35.90;

echo $livro1->exibir();

?>