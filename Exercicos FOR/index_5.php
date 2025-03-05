<?php 

for ($i = 0; $i <= 10; $i += 2) {
    echo $i . "<br>";
}

$numero = 7;

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}

$soma = 0;

for ($i = 1; $i <= 10; $i++) {
    $soma += $i . "<br>";
}

echo "A soma dos números de 1 a 10 é: $soma" . "<br>";


$frutas = ["maçã", "banana", "laranja", "uva", "manga"];

for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . "<br>";
}


for ($i = 1; $i <= 5; $i++) {
    echo str_repeat("*", $i) . "<br>";
}

$numero = 5;
$fatorial = 1;

for ($i = $numero; $i > 0; $i--) {
    $fatorial *= $i;
}

echo "O fatorial de 5 é: $fatorial" . "<br>";

for ($i = 1; $i <= 15; $i +=2) {
    echo $i . "<br>";
}

$n = 10;

$fib = [];
$fib[0] = 0;
$fib[1] = 1;

for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

foreach ($fib as $termo) {
    echo $termo . " " . "<br>";
}

$frase = "Teste com uma string.";
// A função strlen em PHP é usada para obter o comprimento de uma string. Ela retorna o número de caracteres presentes na string fornecida como argumento.
for ($i = 0; $i < strlen($frase); $i++) {
    echo $frase[$i] . "<br>";
}