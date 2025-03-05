<?php 

$nomes = ["João", "Ana", "Carlos", "Marco", "Maria", "Silvia", "Helena", "Ricardo"];
$css = "";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <style>
        .vermelho {
            color: red;
        }
    </style>
</head>
<body>
    
    <?php foreach ($nomes as $nome) : ?>
    <?php if ($nome == "Maria") $css = "vermelho"; ?>
        <h3 class="<?= $css ?>"><?= $nome?></h3>
    <?php endforeach;?>

</body>
</html>