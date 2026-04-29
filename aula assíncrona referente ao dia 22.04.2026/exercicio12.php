<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto Progressivo</title>
</head>
<body>
    
<?php
$valor = 150;
$vip = false;

if ($valor >= 200 || $vip) 
{
    $valor = $valor * 0.85;
} 
elseif ($valor >= 100) 
{
    $valor = $valor * 0.9;
}

echo "Valor final: R$ " . $valor;
?>
</body>
</html>