<?php

// SUPER GLOBAIS
/* 
São variáveis em forma de arrays que estão sempre disponíveis
durantes a execução do código e as quais podemos aceder e manipular
em qualquer escopo de aplicação.
*/

/* 
Vejamos o exemplo de uma variável que pode ser usada dentro
de uma função. Neste caso, todas as variáveis que tem um escopo
global podem ser acedidas através da super global $GLOBALS
*/

$nome = "João";

apresentar();

echo $nome . "<br>";
echo $apelido;

function apresentar() {
    global $nome;
    echo $nome . "<br>";

    // ou

    echo $GLOBALS['nome'] . "<br>";

    //podemos alterar o valor da variável global
    $GLOBALS['nome'] = "carlos";
    $GLOBALS['apelido'] = 'ribeiro';
}