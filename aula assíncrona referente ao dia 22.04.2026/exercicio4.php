<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desconto</title>
</head>
<body>
    
<?php
$valor = 150;

if ($valor >= 100) 
{
    $valordesconto = $valor * 0.9;
}

echo "Valor final: R$ " . $valordesconto;
?>
</body>
</html>