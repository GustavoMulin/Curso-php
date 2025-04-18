<?php

session_start();

// definir uma constante de controle
define('CONTROL', true);

// verificar se existe um usuário logado
$usuario_logado = $_SESSION['usuario'] ?? null;

// verificar qual é a rota na URL
if (empty($usuario_logado)) {
    $rota = 'login';
} else {
    $rota = $_GET['rota'] ?? 'home';
}

// se p usuário está logado, mas a rota é login, vai redirecionar para o home
if (!empty($usuario_logado) && $rota == 'login') {
    $rota = 'home';
} 

// analisa a rota
$rotas = [
    'login' => 'login.php',
    'home' => 'home.php',
    'page1' => 'page1.php',
    'page2' => 'page2.php',
    'page3' => 'page3.php',
    'logout' => 'logout.php'
];

if (!key_exists($rota, $rotas)) {
    die('Acesso negado');
} else {
    require_once $rotas[$rota];
}