<?php

// A SUPER GLOBAL $_GET

// Vamos usar o endereço:
// http://localhost/CURSO-PHP/SG%20GET/index_3.php

$id = isset($_GET['id']) ?$_GET['id'] : null;
$produto = isset($_GET['produto']) ? $_GET['produto'] : null;

echo "ID = $id <br>";
echo "Produto = $produto";

/* 
Vejamos a informação disponivel nas ferramentas dos programador
Network > Name
Headers > Método GET e Payload

Esta é uma das formas que podes usar para passar
informações entre páginas. Cuidado, NUNCA!! passe informações
que possam ser sensiveis ao funcionamento da tua aplicação.

Outra nota: Existem determinados caracteres que entram em conflito.
com uma query string. por exemplo o &, o espaço, o < e >
veremos outra ocasião como ultrapassar esses desafios.
*/