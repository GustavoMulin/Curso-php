<?php 

/* 
CSV - significa Comma Separated Valeus (Valores separados por vírgula)
É um ficheiro com uma estrutura particular que permite ser usado entre
aplicações para transporte de dados. Execel, LibreOffice, Google Sheets,...
*/

// Criar um ficheiro csv
$file = fopen('dados.csv', 'w');

// header das colunas
$header = ['Colunas A', 'Coluna B', 'Coluna C'];
fputcsv($file, $header);

// Linhas
for ($i = 1; $i <= 100; $i++) {
    $linhas = [rand(100, 999), rand(100,900), rand(100,999)];
    fputcsv($file, $linhas);
}

fclose($file);