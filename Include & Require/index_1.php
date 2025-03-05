<?php 
/* 
include
include_once
require
require_once

include - Mostra um aviso se o script não existe e permite continuar a execução.
require - Mostra um erro se o script não existe e interrompe a execução.
*/

require_once('functions.php');

echo soma(20, 5) . "<br>";
echo subtrair(20, 5) . "<br>";
echo multiplicar(20, 5) . "<br>";
echo dividir(20, 5) . "<br>";

$nomes = require_once('dados.php');

echo '<prev>';
print_r($nomes);