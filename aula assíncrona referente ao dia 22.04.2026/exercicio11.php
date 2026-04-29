<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovação de Aluno</title>
</head>
<body>

<?php
$nota = 5;
$frequencia = 90;

if ($nota >= 6 && $frequencia >= 75) 
{
    echo "O aluno está aprovado";
} 
elseif ($nota >= 6 && $frequencia < 75) 
{
    echo "O aluno está reprovado por falta";
} 
else 
{
    echo "O aluno está reprovado por nota";
}
?>
</body>
</html>