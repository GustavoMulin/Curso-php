<?php

// A SUPER GLOBAL $_GET

// Vamos usar o endereço:
// http://localhost/CURSO-PHP/SG%20GET/index_2.php?id=100

// para captar um determinado valor da query string, recorremos
// a chave do array associativo da super global $_GET

//echo $_GET['id'];

// Mas cuidado. Se a variável não existir vai surgir um erro.

//echo $_GET['teste'];

// Devemos sempre verificar se existe e depois captar esse parâmetro
$valor = null;
if (isset($_GET['teste'])) {
    $valor = $_GET['teste'];
}

echo '<br>';
echo "Valor: $valor";