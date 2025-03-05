<?php 

$mensagem_erro = "erro";
$css = "";
$mensagem = null;
if(!empty($mensagem_erro)) {
    $css = "erro";
    $mensagem = $mensagem_erro;
} else {
    $css = "sucesso";
    $mensagem = "SUCESSO";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <style>
        .sucesso {
            color: white;
            background-color: darkgreen;
        }
        .erro {
            color: white;
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="<?= $css ?>"><?= $mensagem ?></div>
</body>
</html>