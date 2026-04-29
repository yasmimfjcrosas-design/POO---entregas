<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus Salarial</title>
</head>
<body>
    
<?php
$salario = 2000;
$anos = 3;
$meta = true;

$bonus = 0;

if ($anos >= 5 && $meta) 
{
    $bonus = $salario * 0.2;
} 
elseif ($anos >= 2 && $meta) 
{
    $bonus = $salario * 0.1;
}

$salario_final = $salario + $bonus;

echo "O salário final é R$ " . $salario_final;
?>
</body>
</html>