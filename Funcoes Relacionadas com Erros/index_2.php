<?php

// Está função define que erros serão apresentados
// o parâmetro pode ser um valor inteiro ou a respectiva constante

error_reporting(E_WARNING);
/* 
    1           E_ERROR
    2           E_WARNING
    4           E_PARSE
    8           E_NOTICE
    16          E_CORE_ERROR
    32          E_CORE_WARNING
    64          E_COMPILE_ERROR
    128         E_COMPILE_WARNING
    256         E_USER_ERROR
    512         E_USER_WARNING
    1024        E_USER_NOTICE
    32767       E_ALL
    2048        E_STRICT
    4096        E_RECOVERABLE_ERROR
    8192        E_DEPRECATED
    16384       E_USER_DEPRECATED 
*/

require_once('ficheiro_inexistente.php');
echo 'Esta frase não vai aparecer';
// Este ficheiro não existe. iria gerar um warning e um fatal error.
// Como temos apenas E_WARNING na função, apenas vai aparecer o aviso.
// ARENÇÃO: o erro que acontece logo depois, apesar de não ser apresentado
// continua a provocar o fim da execução do script.

// Podemos ainda refinar o parâmetro da funçaõ passando mais do que
// uma constante. Por exemplo:

// desliga todas as mensagens de erro.
error_reporting(0);

// Apenas erros de runtime
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//--------------------------------------------------
// Todos os erros
error_reporting(E_ALL);

// O mesmo que a função anterior
ini_set("error_reporting", E_ALL);
//---------------------------------------------------

// Reporta todos os erros, exceto E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Se está em ambiente de desenvolvimento da tua aplicação
// e quer que todos os erros sejam apresentados, pode
// usar o seguinte código:
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
// Todos os erros e avisos serão apresentados sempre
// que o teu código apresentar um problema.