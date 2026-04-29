<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao Evento</title>
</head>
<body>
  
<?php
$idade = 13;
$acompanhado = true;

if ($idade >= 18 || $acompanhado) 
{
    echo "Entrada permitida";
} 
else 
{
    echo "Entrada negada";
}
?>
</body>
</html>