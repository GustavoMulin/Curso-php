<?php 

$dia = 1;

switch ($dia) {
    case 1:
        echo "Domingo" . "<br>";
        break;
    case 2:
        echo "Segunda-Feira" . "<br>";
        break;
    case 3:
        echo "Terça-Feira" . "<br>";
        break;
    case 4:
        echo "Quarta-Feira" . "<br>";
        break;
    case 5:
        echo "Quinta-Feira" . "<br>";
        break;
    case 6:
        echo "Sexta-Feira" . "<br>";
        break;
    case 7:
        echo "Sábado" . "<br>";
        break;
    default:
        echo "Número Invalido! dígite um número entre 1 e 7";
}

$estacao = 2;

switch($estacao) {
    case 1:
        echo "Verão" . "<br>";
        break;
    case 2:
        echo "outono" . "<br>";
        break;
    case 3:
        echo "Inverno" . "<br>";
        break;
    case 4:
        echo "Primavera" . "<br>";
        break;
    default:
        echo "Número Invalido! dígite um número entre 1 e 7";
}

$num1 = 10;
$num2 = 0;
$operador = "/";

switch($operador) {
    case "+":
        echo "Resultado " . ($num1 + $num2) . "<br>";
        break;
    case "-":
        echo "Resultado " . ($num1 - $num2) . "<br>";
        break;
    case "*":
        echo "Resultado " . ($num1 * $num2) . "<br>";
        break;
    case "/":
        if($num2 != 0) {
            echo "Resultado " . ($num1 / $num2);
        } else {
            echo "Erro! divisão por zero " . "<br>";
        }
        break;
    default:
        echo "Operação Invalida ";
}

$resultado = match($estacao) {
   "1" => "verão" . "<br>",
   "2" => "Outono" . "<br>",
   "3" => "Inverno" . "<br>",
   "4" => "Primavera" . "<br>",
   default => "Estado da encomenda é desconhecido" 
};

echo $resultado;

$valor = 100;

$resultado = match(true) {
    $valor > 100 => "Valor maior que 100",
    $valor == 100 => "Valor igual a 100",
    $valor < 100 => "Valor menor que 100"
};

$valor = 50;

$resultado = match(true) {
    $valor > 100 => fn1(),
    $valor == 100 => fn2(),
    $valor < 100 => fn3()
};

echo $resultado;

function fn1 () {
    return "Valor maior que 100.";
}

function fn2() {
    return "Valor igual a 100.";
}

function fn3() {
    return "Valor menor que 100.";
}