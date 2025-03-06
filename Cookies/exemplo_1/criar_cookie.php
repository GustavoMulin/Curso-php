<?php 

//criar o cookie
$nome = 'meu_cookie';
$valor = 'conteudo_do_meu_cookie';
$expiracao = 3600; // 1 hora de duração
setcookie($nome, $valor, time() + $expiracao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP cookies</title>
</head>
<body>
    
    <?php require_once ('nav.php')?>

    <h3>Criar cookie</h3>
    <hr>
    <p>Cookie cirado com sucesso.</p>

</body>
</html>