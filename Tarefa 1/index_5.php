<?php 

$lojas = [
    "lisboa" => "lisbo@gmail.com",
    "porto" => "porto@gmail.com",
    "coimbra" => "coimbr@gmail.com"
];

$cidade = "coimbra";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    
    <?php if (key_exists($cidade, $lojas)) :?>
        <h3><?= $cidade ?></h3>
        <p><?= $lojas[$cidade]?></p>
    <?php else : ?>
        <p>Não existe nehuma loja na cidade indicada.</p>
    <?php endif;?>

</body>
</html>