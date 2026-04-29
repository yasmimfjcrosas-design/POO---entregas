<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de acesso</title>
</head>
<body>
    
<?php
$idade = 20;
$nivel = 2;
$bloqueado = false;

if ($bloqueado) 
{
    echo "Acesso negado";
} 
elseif ($nivel == 3) 
{
    echo "Acesso total";
} 
elseif ($nivel == 2 && $idade >= 18) 
{
    echo "Acesso parcial";
} 
else 
{
    echo "Acesso limitado";
}
?>
</body>
</html>