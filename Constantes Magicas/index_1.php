<?php

// CONSTANTES MÁGICAS

/* 
Existem noves constantes mágicas no PHP.
São designadas por constantes mágicas, porque o seu valor é definido
dependendo do local onde estão a ser usadas.
Por exemplo, o valor de __LINE__ depende da linha do código dentro do script
onde a constante mágica está a ser usada.
são constantes case-insentitive, e permitem solucionar vários desafios.
*/

// ------------------------------------------------------------------------
// __LINE__
// indica a linha atual do código onde a constante se encontra
echo 'Número da linha em index_1.php: ' . __LINE__ . '<br>';

require_once 'script.php';

// __FILE__
// O caminho completo do ficheiro, independentemente de envolverem
// symbolic links. Se for usada dentro de um include ou requiro,
// será indicado o nome do script que está a ser incluido.

echo '(index_1.php): ' . __FILE__ . '<br>';

include 'script_1.php';
require 'script.php';