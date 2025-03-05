<?php 

$nome = "Ana"; // É uma variável de escopo global

if(true) {
    echo $nome . "<br>";
}

for($i = 1; $i <= 2; $i++) {
    echo $nome . "<br>";
}

function executar() {
    global $nome;
    $nome = "Gustavo"; // É uma variável de escopo local
}

executar();

echo $nome;