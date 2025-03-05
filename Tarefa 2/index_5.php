<?php 


$frase = "Esta frase vai aparecer com diferentes opacidades";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
   
    <?php for($i = 10; $i >= 0; $i--) : ?>
        <h3 style="opacity: <?= $i / 10 ?>"><?= $frase ?></h3>
    <?php endfor;?>

</body>
</html>