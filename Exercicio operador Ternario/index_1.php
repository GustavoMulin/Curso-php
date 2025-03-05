<?php 
// 1
$idade = 15;
echo "Eu sou " . ($idade >= 18 ? "maior de idade." : "menor de idade.");

echo "<br>";
//2
$erro = true;
echo "Resultado: " . ($erro ? "aconteceu um erro" : "Sucesso");

echo "<br>";
// 3
$numero = 7;

echo "O número é " . ($numero % 2 == 0 ? "PAR" : "ÍMPAR");

echo "<br>";
//4
$usuario = false;

echo "O usuário está " . ($usuario ? "ATIVO" : "INATIVO");

echo "<br>";
//5
$valorCompra = 120;
$valorDesconto = ($valorCompra >= 100) ? $valorCompra * 0.10 : 0;
$valorFinal = $valorCompra - $valorDesconto;

echo "Valor da Compra $valorCompra" . "<br>";
echo "Desconto aplicado $valorDesconto" . "<br>";
echo "Valor Final $valorFinal" . "<br>";
//6
$nota = 3.5;

echo "Sua nota é $nota é você está: " . ($nota >= 7 ? "APROVADO" : "REPROVADO") . "<br>";
//7
$cargo = "Usuário Comun";
$acesso = ($cargo == "admin") ? "Acesso Total" : "Acesso Restrito";

echo "O cargo de $cargo tem $acesso" . "<br>";
//8
$a = 50;
$b = 20;
$maior = ($a > $b) ? "O número $a é Maior" : "O número $b é Maior";

echo $maior . "<br>";
//9
$nome = "";
$mensagem = (!empty($nome)) ? "Bem-vindo $nome" : "Bem-vindo Visitante";

echo $mensagem . "<br>";

//10
$num = 0;
$resultado = ($num > 0) ? "O número $num é POSITIVO" : (($num < 0) ? "O número $num e NEGATIVO" : "ZERO");

echo $resultado . "<br>";

//11
$temperatura = 31;
$resul = ($temperatura <= 15) ? "Frio" : (($temperatura >= 16 && $temperatura <= 30) ? "Agradável" : "Quente");

echo $resul;