<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de numeros pares while</title>
</head>
<body>
    <?php
$contador = 1;
$soma = 0; 

while ($contador <= 10) { 
    if ($contador % 2 == 0) { 
        $soma += $contador;
    }
    $contador++;
}

echo "Soma dos pares: {$soma}"; 
?>
</body>
</html>