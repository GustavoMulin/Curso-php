<?php

// iniciação dos arrays
$numeros_positivos = [];
$numeros_negativos = [];
$textos = [];
$textos_teste = [];

// lógica aqui...
$files = file('dados.dat');
foreach ($files as $file){
     if ($file > 0 && is_numeric($file)){
        $numeros_positivos[] = $file;
    } 
}

$files = file('dados.dat');
foreach ($files as $file){
    if ($file < 0 && is_numeric($file)){
        $numeros_negativos[] = $file;
    } 
}

$files = file('dados.dat');
foreach ($files as $file){
    if ($file != is_numeric($file) && !preg_match('/TESTE/', $file)){
        $textos[] = $file;
    } 
}

$files = file('dados.dat');
foreach ($files as $file){
    if (preg_match('/TESTE/', $file)){
        $textos_teste[] = $file;
    } 
}

// apresentação dos arrays
echo '<pre>';
print_r($numeros_positivos);
echo '<hr>';
print_r($numeros_negativos);
echo '<hr>';
print_r($textos);
echo '<hr>';
print_r($textos_teste);