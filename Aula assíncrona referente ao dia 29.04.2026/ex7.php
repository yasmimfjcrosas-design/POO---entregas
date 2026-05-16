<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Notas aprovadas foreach</title>
</head>
<body>
    <?php
$notas = [8, 5, 7, 4, 9];
$aprovados = 0;

foreach ($notas as $nota) {
    if ($nota >= 6) { 
        $aprovados++; 
    }
}

echo "Total de aprovados: {$aprovados}"; 
?>
</body>
</html>