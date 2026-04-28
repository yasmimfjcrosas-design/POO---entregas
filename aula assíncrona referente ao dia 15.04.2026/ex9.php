<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Juros Simples</title>
</head>
<body>
    
<?php

//variáveis
$capital = 1000;   // C
$taxa = 0.05;      // i 
$tempo = 2;        // t 

//calculo
$juros = $capital * $taxa * $tempo;

//exibição
echo "O valor do juro gerado é R$ " . $juros ;
?>

</body>
</html>