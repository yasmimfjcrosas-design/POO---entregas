<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar o maior numero</title>
</head>
<body>
    <?php
$numeros = [5, 8, 2, 15, 3]; 
$maior = $numeros[0]; 

foreach ($numeros as $n) { 
    if ($n > $maior) { 
        $maior = $n;
    }
}

echo "O maior numero e: {$maior}"; 
?>
</body>
</html>