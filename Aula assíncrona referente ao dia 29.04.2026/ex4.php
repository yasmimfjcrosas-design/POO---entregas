<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Numeros Pares For</title>
</head>
<body>
    <?php
for ($i = 1; $i <= 10; $i++) { 
    if ($i % 2 == 0) { 
        echo "Numero par:{$i} "; 
    }
}
?>
</body>
</html>