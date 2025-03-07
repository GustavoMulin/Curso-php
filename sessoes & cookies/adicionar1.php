<?php 
session_name('minha_sessao');
//Tag para duração do meu cookie. sempre em segundos
session_set_cookie_params(180);
session_start();
$_SESSION['nome'] = "Gustavo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php require_once 'nav.php' ?>

    <hr>
    <h2>Valor 'nome' adicionado a sessão</h2>


</body>
</html>