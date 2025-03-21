<?php

// A SIMPLES E COMPLEXA VALIDAÇÃO DE DADOS


// validar se tem número de carcteres válidos (3 a 20)
$valor = "joao ribeiro é o instrutor";
if (strlen($valor) < 3 || strlen($valor) > 20) {
    echo 'A string deve ter entre 3 e 20 caracteres.<br>';
}

// validar se é um email válido
$email = "joao.ribeiro@gmail.com";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
echo '<br>';

// filter_var retorna o valor, caso seja válido, ou false,
// Se o valor não estiver de acordo com a validação pretendida

// validar se um telefone começa por 9 e tem 9 dígitos
var_dump(preg_match("/^9(1)\d(8)$/", "966213456"));
// 1 = expressão regular confirmar o valor analisado
// 0 = expressão regular não confirmar o valor analisado
// false = aconteceu um erro

// Veremos mais detalhes sobre expressões regulares
// no módulo mais avançado de PHP.

// A validação de dados, é uma das áreas mais importantes para
// impedir erros de execução dos nosso scripts.