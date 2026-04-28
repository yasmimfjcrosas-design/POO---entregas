<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de desconto</title>
</head>
<body>

<?php

//variáveis
$valor = 100; //R$
$percentual = 50; //%

//cálculo
$desconto = $valor * ($percentual / 100);
$valorFinal = $valor - $desconto;

//exibição
echo "O produto custava R$ $valor e agora custa R$ $valorFinal";
?>

</body>
</html>