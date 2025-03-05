<?php 
/*
Costrói uma apresentação em HTML que mostra a tabuada do 5!
*/



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <?php for($i = 1; $i <= 10; $i++): ?>
        <h3> 5 x <?= $i?> = <?= 5 * $i?></h3>
    <?php endfor;?>
</body>
</html>