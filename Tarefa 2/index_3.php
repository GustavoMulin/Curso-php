<?php 

$nomes = ["João", "Ana", "Carlos", "Marco", "Maria", "Silvia", "Helena", "Ricardo"];
$ignorar = "Maria";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <?php foreach($nomes as $nome): ?>
        <?php if ($nome == $ignorar) continue;?>
               <h3 style="color: red;"><?= $nome?></h3>
    <?php endforeach;?>
</body>
</html>