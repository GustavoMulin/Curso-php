<?php 

function apresenta() {
    echo "Estou dentro de uma função de PHP.";
}

apresenta();

echo "<br>";

executar();

function executar() {
    echo "função executar<br>";
}

for ($i = 1; $i <= 10; $i++) {
    funcao_teste();
}

function funcao_teste() {
    echo "Execução da função<br>";
}

function mensagem() {
    return "Este texto foi criado dentro de uma função.";
}

$texto = mensagem();
echo $texto . "<br>";

function vezes() {
    $valor1 = 100;
    $valor2 = 5;
    return $valor1 * $valor2;
}

$resultado = vezes();
echo $resultado . "<br>";

//Um parâmetro de uma função em PHP é uma variável que recebe valores durante a chamada da função. Esses valores são tratados dentro do código da função, podendo alterar o resultado final.
function adicao($a, $b) {
    return $a + $b;
}

echo adicao(100, 50) . "<br>";

function multiplicar($a, $b = 5) {
    return $a * $b;
}

echo multiplicar(10) . "<br>";

echo multiplicar(10,3) . "<br>";

function apresentar($a, $b, $c = 100) {
    return "$a | $b | $c";
}

echo apresentar(10,20) . "<br>";
echo apresentar(10,20,30) . "<br>";
echo apresentar(c: 1, b: 2, a: 3) . "<br>";

function multiplicacao($a, $b): int|float {
    return $a * $b;
}
echo multiplicacao(10.3,2); 