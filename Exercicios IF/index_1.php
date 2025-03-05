<?php 

$num = 10;

if($num > 0) {
    echo "O número é positivo" . "<br>";
} elseif($num < 0) {
    echo "O número e negativo" . "<br>";
} else {
    echo "O numero e zero" . "<br>";
} 

if($num % 2 == 0) {
    echo "O número e PAR" . "<br>";
} else {
    echo "O número e ÍMPAR" . "<br>";
}

$a = 50;
$b = 50;

if($a > $b) {
    echo "O valor $a é maior que o valor $b" . "<br>";
} elseif($a < $b) {
    echo "O valor $b e maior que o valor $a" . "<br>";
} else{
    echo "Os valores são iguais" . "<br>";
}

$nota = 4.0;

if($nota >= 7) {
    echo "Aprovado" . "<br>";
} elseif($nota >= 5) {
    echo "Recperação" . "<br>";
} else {
    echo "Reprovado" . "<br>";
}

$idade = 16;

if($idade >= 18) {
    echo "Você pode tirar a carteira de motorista" . "<br>";
} else {
    echo "Você não pode tirar a carteira de motorista" . "<br>";
}

$usuario = "kaynnã";
$senha = "1234";

$usuarioDigitado = "Gustavo";
$senhaDigitada = "12345678";

if($usuarioDigitado == $usuario && $senhaDigitada == $senha) {
    echo "Login Bem-Sucedido!" . "<br>";
} else {
    echo "Usuario ou Senha incorreta" . "<br>";
}

$valorCompra = 80;

if ($valorCompra > 100) {
    $desconto = $valorCompra * 0.10;
    $valorFinal = $valorCompra - $desconto;
    echo "O valor com o desconto de 10% é de: $valorFinal" . "<br>";
} else {
    echo "Sem desconto fica $valorCompra" . "<br>";
}

$num1 = 10;
$num2 = 5;
$operacao = "+"; 

if ($operacao == "+") {
    $resultado = $num1 + $num2;
    echo "$num1 + $num2 = $resultado" . "<br>";
} elseif ($operacao == "-") {
    $resultado = $num1 - $num2;
    echo "$num1 - $num2 = $resultado" . "<br>";
} elseif ($operacao == "*") {
    $resultado = $num1 * $num2;
    echo "$num1 * $num2 = $resultado" . "<br>";
} elseif ($operacao == "/") {
    if ($num2 != 0) {
        $resultado = $num1 / $num2;
        echo "$num1 / $num2 = $resultado" . "<br>";
    } else {
        echo "Erro: Divisão por zero não é permitida." . "<br>";
    }
} else {
    echo "Operação inválida!" . "<br>";
}

echo "<br>";

$lado1 = 1;
$lado2 = 2;
$lado3 = 3;

if ($lado1 == $lado2 && $lado2 == $lado3) {
    echo "É um triângulo equilatero" . "<br>";
} elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
    echo "É um triângulo isósceles" . "<br>";
} else {
    echo "É um triângulo escaleno" . "<br>";
}

echo "<br>";

$valorcompra = 80;

if ($valorcompra > 500) {
    $desconto = $valorcompra * 0.20;
    $valorfinal = $valorcompra - $desconto;
    echo "A comprar com o desconto de 20% fica $valorfinal R$" . "<br>";
} elseif ($valorcompra >= 100 && $valorcompra <= 500) {
    $desconto = $valorcompra * 0.10;
    $valorfinal = $valorcompra - $desconto;
    echo "O valor com o desconto de 10% fica $valorfinal R$" . "<br>";
} else {
    echo "Sem desconto fica $valorcompra R$" . "<br>";
}

echo "<br>";

$peso = 85;
$altura = 1.85;
$imc =  $peso / ($altura ** 2);

if ($imc < 18.5) {
    echo "Abaixo do peso" . "<br>";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Peso normal" . "<br>";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Sobrepeso" . "<br>";
} else {
    echo "Obesidade" . "<br>";
}

echo "<br>";

$idade = 21;
$salario = 2000;

if ($idade >= 18 && $idade <= 65 && $salario >= 2000) {
    echo "Empréstimo Aprovado" . "<br>";
} else {
    echo "Empréstimo negado!!, menor de idade ou sálario abaixo de 2.000";
}

echo "<br>";
