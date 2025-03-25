<?php

// criar a função aqui ...
function divisao() {
    echo '<pre>';
    global $valor1;
    global $valor2;
    if ($valor1 == 0 || $valor2 == 0) {
        echo "$valor1 : $valor2 = Erro Divisão por Zero";
    } else {
        echo "$valor1 : $valor2 = " . $valor1 / $valor2;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 02</title>
</head>

<body>

    <?php for ($i = 0; $i <= 20; $i++) : ?>

        <?php 
            $valor1 = rand(0,10);
            $valor2 = rand(0,10);
        ?>

        <!-- apresentar os valores aqui -->
        <h3><?= divisao($valor1, $valor2)?></h3>
    <?php endfor; ?>


</body>

</html>