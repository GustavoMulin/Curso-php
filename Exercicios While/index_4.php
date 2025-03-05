<?php 

$contador = 10;
while($contador >= 1) {
    echo $contador . "<br>";
    $contador--;
}

$soma = 0;
$numero = 1;

while ($numero <= 10) {
    $soma += $numero;
    $numero++;
}

echo "A soma dos números de 1 a 10 é: $soma" . "<br>";

$num = 0;

while ($num <= 20) {
    echo $num . "<br>";
    $num += 2;
}


$numeros = 5;
$cont = 1;

while ($cont <= 10) {
    echo "$numeros x $cont = " . ($numeros * $cont) . "<br>";
    $cont ++;
}

do {
    $n = rand(1, 10);
    echo "Número gerado: $n" . "<br>";
} while ($n != 7);

echo "Número 7 foi encontrado!" . "<br>";

$frase = "PHP";
$contado = 0;


//A função isset do PHP verifica se uma variável existe ou se ela não é nula.
while (isset($frase[$contado])) {
    $contado++;
}

echo "A frase tem $contado caracteres." . "<br>";

$numero = 1234; 
$soma = 0;

while ($numero > 0) {
    $digito = $numero % 10;  
    $soma += $digito;        
    $numero = (int)($numero / 10); 
}

echo "A soma dos dígitos é: $soma" . "<br>";

$numero = 5;
$fatorial = 1;
$contador = $numero;

while ($contador > 1) {
    $fatorial *= $contador;
    $contador--;
}

echo "O fatorial de $numero é: $fatorial" . "<br>";

$string = "987654";
$contador = 0;

while (isset($string[$contador])) {
    $contador++;
}

echo "A string contém $contador dígitos." . "<br>";


$numero = 17; 
$divisores = 0;
$contador = 1;

while ($contador <= $numero) {
    if ($numero % $contador == 0) {
        $divisores++;
    }
    $contador++;
}

if ($divisores == 2) {
    echo "$numero é um número primo.";
} else {
    echo "$numero não é um número primo.";
}

$numero = 5;
$fatorial = 1;
$contador = 1;

while ($contador <= $numero) {
    $fatorial *= $contador;
    $contador++;
}

echo "O fatorial de $numero é igual a $fatorial" . "<br>";