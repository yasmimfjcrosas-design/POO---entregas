<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números while</title>
</head>
<body>
    <?php
$contador = 1;
$soma = 0; 

while ($contador <= 5) {
    $soma += $contador; 
    $contador++;
}

echo "A soma eh {$soma}";
?>
</body>
</html>