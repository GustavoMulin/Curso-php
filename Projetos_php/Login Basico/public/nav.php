<?php
defined('CONTROL') or die ('Acesso negado');
?>

<hr>
<span>Usuário: <strong><?= $_SESSION['usuario']?></strong></span>
 <span>
    <a href="?rota=logout">Sair</a>
</span>
<hr>

<nav>
    <a href="?rota=home">| Home |</a>
    <a href="?rota=page1">Página1 |</a>
    <a href="?rota=page2">Página2 |</a>
    <a href="?rota=page3">Página3 |</a>
    <a href="?rota=logout">Sair |</a>
</nav>
