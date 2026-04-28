<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - sistema de venda</title>
</head>
<body>
    
<?php

//variáveis
$cliente = "João";
$valor = 200;
$percentual = 10;

//calculos
$desconto = $valor * ($percentual / 100);
$valor_final = $valor - $desconto;

//exibição
echo "O cliente $cliente comprou um produto de R$ $valor recebeu R$ $desconto de desconto e pagará R$ $valor_final";
?>

</body>
</html>