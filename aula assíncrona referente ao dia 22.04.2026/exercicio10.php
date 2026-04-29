<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloqueio de Usuário</title>
</head>
<body>
    
<?php
$bloqueado = false;

if (!$bloqueado) 
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