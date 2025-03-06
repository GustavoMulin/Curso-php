<?php 

session_name('minha_sessao');
//Tag para duração do meu cookie. sempre em segundos
session_set_cookie_params(180);
session_start();

$nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-';
$sobrenome = !empty($_SESSION['sobrenome']) ? $_SESSION['sobrenome'] : '-';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php require_once 'nav.php'?>
    
    <hr>
    <h2>Exercícios com sessões & cookies em PHP</h2>

    <h3>Valor da váriavel 'nome'</h3>
    <h1><?= $nome?></h1>

    <h3>Valor da váriavel 'sobrenome'</h3>
    <h1><?= $sobrenome?></h1>

</body>
</html>