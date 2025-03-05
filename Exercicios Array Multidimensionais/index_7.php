<?php 

$ArrayMulti = [
    ['Escola A', 'Escola B', 'Escola C'],

    ['CNPJ A', 'CNPJ B', 'CNPJ C'],

    ['Pernambuco', 'Alagoas', 'Rio de Janeiro', 'São Paulo']
];

echo $ArrayMulti[1][0] . "<br>";

echo "<br><br>";

$lojas = [
    'porto' => [
        'telefone' => '111',
        'email' => 'porto@gmail.com'
    ],
    'lisboa' => [
        'telefone' => '222',
        'email' => 'lisbo@gmail.com'
    ],
    'coimbra' => [
        'telefone' => '333',
        'email' => 'coimbr@gmail.com'
    ]
];


print_r($lojas) . "<br>"; 
echo "<br><br>";
echo $lojas['porto']['telefone'] . "<br>";
echo "<br><br>";

$alunos = [
    ["nome" => "Ana", "Idade" => 20, "Curso" => "Engenharia"],
    ["nome" => 'Bruno', "Idade" => 22, "Curso" => "Medicina"],
    ["nome" => "Carla", "Idade" => 19, "Curso" => "Adiministração"] 
];

foreach ($alunos as $aluno);
    echo "Nome: " . $aluno["nome"] . "<br>";
    echo "Idade: " . $aluno["Idade"] . "<br>";
    echo "Curso: " . $aluno["Curso"] . "<br><br>";


$Produtos = [
    ["nome" => "Cafe", "preco" => 40.00, "Estoque" => 50],
    ["nome" => "Arroz", "preco" => 32.00, "Estoque" => 75],
    ["nome" => "Feijão", "preco" => 35.00, "Estoque" => 80]
];
 
foreach ($Produtos as $produto){
    echo "Produto: " . $produto["nome"] . "<br>";
    //A função number_format() é utilizada para formatar o valor do preço com duas casas decimais, utilizando vírgula como separador decimal e ponto como separador de milhar.
    echo "Preço: R$" . number_format($produto["preco"], 2, ",", ".") . "<br>"; 
    echo "Estoque: " . $produto["Estoque"] . "<br><br>";

};
    
   
$matriz = [
    [1, 2, 3],
    [3, 4, 5],
    [6, 7, 8]
];

for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz); $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br><br>";

$contatos = [
    [
        "nome" => "Ana Silva",
        "telefone" => "(11) 91234-5678",
        "email" => "ana@email.com"
    ],
    [
        "nome" => "Bruno Souza",
        "telefone" => "(21) 92345-6789",
        "email" => "bruno@email.com"
    ],
    [
        "nome" => "Carla Mendes",
        "telefone" => "(31) 93456-7890",
        "email" => "carla@email.com"
    ]
];

foreach ($contatos as $contato) {
    //A tag HTML <strong> (Strong) destaca em negrito um trecho de texto, indicando que deve ser lido com mais ênfase. 
    echo "<strong>Nome:</strong> " . $contato["nome"] . "<br>";
    echo "<strong>Telefone:</strong> " . $contato["telefone"] . "<br>";
    echo "<strong>Email:</strong> " . $contato["email"] . "<br><br>";
}

$calendario = [
    "Segunda" => ["Reunião de equipe", "Almoço com cliente"],
    "Terça" => ["Apresentação de projeto"],
    "Quarta" => ["Treinamento interno", "Revisão de metas"],
    "Quinta" => ["Consulta"],
    "Sexta" => ["Happy hour"],
];

echo "<strong>Ecentos de Quarta:</strong><br>";
if (isset($calendario["Quarta"]) && count($calendario["Quarta"]) > 0) {
    foreach ($calendario["Quarta"] as $evento) {
        echo "- " . $evento . "<br>";
    }
} else {
    echo "Nenhum evento para Quarta. <br>";
}
echo "<br><br>";