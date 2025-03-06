<?php 
session_name('minha_sessao');
//Tag para duração do meu cookie. sempre em segundos
session_set_cookie_params(180);
session_start();
unset($_SESSION['nome']);
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
    <h2>O valor 'nome' foi removido da sessão</h2>


</body>
</html>