<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos elementos do array</title>
</head>
<body>
    <?php
$numeros = [10, 20, 30, 40]; 
$somaTotal = 0;

foreach ($numeros as $n) { 
    $somaTotal += $n;
}

echo "A soma total e: {$somaTotal}"; 
?>
</body>
</html>