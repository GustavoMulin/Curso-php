<?php 

// Exercicios Array

$numeros = [10, 20, 30, 40, 50];

// A tag array_sum soma os elementos de um Array
$soma = array_sum($numeros);

echo "A soma dos números é: $soma" . "<br>";


$num = [15, 8, 23, 4, 16];

// A tag max mostra o maior valor do elementos
$maior = max($num);
// A tag min mostra o menor valor do elementos
$menor = min($num);

echo "Maior número: $maior" . "<br>";
echo "Menor número: $menor" . "<br>";

$n = [5, 2, 9, 1, 7];

// Ordenação Crescente
sort($n);
echo "Ordem crescente: " . implode(", ", $n) . "<br>";

// Ordenação Decrescente
rsort($n);
echo "ordem decrescente: " . implode(", ", $n) . "<br>";
// A tag implode une os elementos de um array em uma string


$frutas = ["Banana", "Laranja", "Maçã", "Uva"];


// A tag in_array verifica se um valor existe num array
if(in_array("Maracuja", $frutas)) {
    echo "A fruta maçã está na lista." . "<br>";
} else {
    echo "A fruta não está na lista." . "<br>";
}


$carros = ["BMW", "Toyota", "Honda", "Ford"];

// Removendo o valor de acordo com indice escolhido
unset($carros[2]);

// A tag print_r exibe informações sobre uma variável de forma legível para humanos.
print_r($carros);


$animais = ["cachorro", "gato", "elefante", "leão", "tigre"];

echo "O array tem " . count($animais) . " elementos" . "<br>";

$pessoa = [
    "nome" => "Gustavo",
    "idade" => "21",
    "cidade" => "pvh"
];

echo "Nome: " . $pessoa["nome"] . "<br>";
echo "Idade: " . $pessoa["idade"] . "<br>";
echo "Cidade: " . $pessoa["cidade"] . "<br>";


$numero = [5, 12, 3, 18, 9, 21];

// A tag array_filter filtra arrays com base em uma função de retorno de chamada.
$maioresQue10 = array_filter($numero, function($numero) {
    return $numero > 10;
});

print_r($maioresQue10);

$cores1 = ["Vermelho"];
$cores2 = ["Verde", "Azul"];

// A tag aray_merge une os elementos de dois ou mais arrays, anexando os valores de um ao final do outro. 
$todasAsCores = array_merge($cores1, $cores2);

print_r($todasAsCores);