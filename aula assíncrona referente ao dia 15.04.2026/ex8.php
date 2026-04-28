<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Troco</title>
</head>
<body>

<?php
//Variáveis
$valorcompra = 700;
$valorpago = 1000;

// Cálculo
$troco = $valorpago - $valorcompra;

// Exibição
echo "O troco a ser devolvido é R$ " . $troco;

?>

</body>
</html>