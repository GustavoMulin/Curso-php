<?php
session_start();
// lógica de tratamento do formulário

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    return;
}

$inputs = [];

$inputs['text_valor_1'] = [
    'value' => '',
    'erro' => ''
];

if (empty($_POST['text_valor_1'])) {
    $inputs['text_valor_1']['erro'] = 'O campo é de preenchimento obrigatório';
} else {
    $inputs['text_valor_1']['value'] = $_POST['text_valor_1'];
    if ($_POST['text_valor_1'] < 0 ) {
        $inputs['text_valor_1']['erro'] = 'O número tem que ser positivo!!';
    }
}

if (empty($_POST['text_valor_2'])) {
    $inputs['text_valor_2']['erro'] = 'O campo é de preenchimento obrigatório';
} else {
    $inputs['text_valor_2']['value'] = $_POST['text_valor_2'];
    if ($_POST['text_valor_2'] < 0) {
        $inputs['text_valor_2']['erro'] = 'O número tem que ser positivo!!';
    }
    
}

if (!empty($inputs['text_valor_1']['erro'] || !empty($inputs['text_valor_2']['erro']))) {
    $_SESSION['inputs'] = $inputs;
    header('Location: tratamento.php');
    return;
}

$valor1 = $_POST['text_valor_1'];
$valor2 = $_POST['text_valor_2'];

$multi = $valor1 * $valor2;

echo "<h3>A multiplicação entre $valor1 é $valor2 é de $multi</h3>";