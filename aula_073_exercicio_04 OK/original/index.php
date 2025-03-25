<?php
session_start();

$inputs = [];
if (isset($_SESSION['inputs'])) {
    $inputs = $_SESSION['inputs'];

    unset($_SESSION['inputs']);
}

function show_erro($campo) {
    global $inputs;
    if (key_exists($campo, $inputs)) {
        if (!empty($inputs[$campo]['erro'])){
            return '<span style="color: red;"><small><i>' . $inputs[$campo]['erro'] . '</sapn></small></i>';
        } else {
            return '';
        }
    } else {
        return '';
    }
}

function show_value($campo) {
    global $inputs;
    if (key_exists($campo, $inputs)) {
        if (!empty($inputs[$campo]['value'])){
            return $inputs[$campo]['value'];
        } else {
            return '';
        }
    } else {
        return '';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 04</title>
</head>
<body>
    
    <form action="submissao.php" method="post">
        <label>Texto</label>
        <input type="text" name="text" value="<?= show_value('text')?>">
        <?= show_erro('text')?>
        <input type="submit" value="Enviar">
        
    </form>

</body>
</html>