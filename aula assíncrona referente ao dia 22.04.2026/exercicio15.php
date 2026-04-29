<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Temperatura</title>
</head>
<body>
  
<?php
$temp = 30;

if ($temp < 15) 
{
    echo "Frio";
} 
elseif ($temp <= 25) 
{
    echo "Agradável";
} 
elseif ($temp <= 35) 
{
    echo "Quente";
} 
else 
{
    echo "Muito quente";
}
?>
</body>
</html>