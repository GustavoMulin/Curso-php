<?php 

$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Manga"];

foreach ($frutas as $key => $fruta) {
    echo $key . " - " . $fruta . "<br>";
}

$pessoa = [
    "nome" => "gustavo",
    "idade" => 21,
    "cidade" => "pvh"
];


foreach ($pessoa as $chave => $valor) {
    // A função ucfirst do PHP transforma o primeiro caractere de uma string em maiúscula. 
    echo ucfirst($chave) . ": " . $valor . "<br>";
}

$numeros = [37, 15, 21, 9, 43];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero . "<br>";
}

echo "O soma entre os elementos é: $soma" . "<br>";


$produtos = [
    ["nome" => "Notebook", "preco" => 3500],
    ["nome" => "Smartphone", "preco" => 2500],
    ["nome" => "Tablet", "preco" => 1200]
];

foreach ($produtos as $produto) {
    echo "Produto: " . $produto["nome"] . " - Preço: R$ " . $produto["preco"] . "<br>";
}

$temperaturaC = [0, 10, 20, 30];
$temperaturaF = [];

foreach ($temperaturaC as $tempC) {
    $temperaturaF[] =  ($tempC * 9/5) + 32 . "<br>";
}

print_r($temperaturaF);

$palavras = ["php", "java", "php", "python", "python", "php"];
$frequencia = [];

foreach ($palavras as $palavra) {
    if (isset($frequencia[$palavra])) {
        $frequencia[$palavra]++;
    } else {
        $frequencia[$palavra] = 1;
    }
}

print_r($frequencia);

$cores = ["vermelho", "verde", "azul", "preto"];

foreach ($cores as $indice => $cor) {
    echo "índice $indice: $cor". "<br>";
}

