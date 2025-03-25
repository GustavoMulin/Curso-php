<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    return;
}

$inputs = [];

$inputs ['text'] = [
    'value' => '',
    'erro' => ''
];

if (empty($_POST['text'])) {
    $inputs['text']['erro'] = "Campo de preenchimento obrigatório";
    $_SESSION['inputs'] = $inputs;
    header('Location: index.php');
    return;
} else {
    $inputs['text']['value'] = $inputs['text'];
    if (is_numeric($_POST['text'])) {
        file_put_contents('dados_numericos.txt', $_POST['text'] . PHP_EOL, FILE_APPEND);
        echo $_POST['text'] . '<br>';
        echo "<h2>Valor numérico guardado com sucesso.<h2>";
    } else {
        file_put_contents('dados_string.txt', $_POST['text'] . PHP_EOL, FILE_APPEND);
        echo $_POST['text'] . '<br>';
        echo "<h2>Valor string guardado com sucesso.<h2>";
    }
}

