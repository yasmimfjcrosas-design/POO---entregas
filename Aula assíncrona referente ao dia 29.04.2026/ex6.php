<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de nomes foreach</title>
</head>
<body>
    <?php
$nomes = ["Ana", "Carlos", "João"];

foreach ($nomes as $nome) { 
    echo " Nome: {$nome}   "; 
}
?>
</body>
</html>