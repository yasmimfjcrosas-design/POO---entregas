<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de login</title>
</head>
<body>
   
<?php
$usuario = "admin";
$senha = "1234";

if ($usuario == "admin" && $senha == "1234") 
{
    echo "Acesso permitido";
} 
else 
{
    echo "Acesso negado";
}
?>
</body>
</html>