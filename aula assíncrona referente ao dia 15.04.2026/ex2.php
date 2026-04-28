<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de Veículos</title>
</head>
<body>

<?php

// Variáveis
$distancia_percorrida = 300; // km
$combustivel_gasto = 25; // litros

// Cálculo
$consumo = $distancia_percorrida / $combustivel_gasto;

// Exibição
echo "O consumo médio do veículo foi de " . $consumo . " km/l";

?>

</body>
</html>