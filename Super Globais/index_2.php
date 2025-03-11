<?php

// $_SERVER - 
/* Informações sobre o servidor e ambiente de execução */

// nome do script atualmente em execução.
echo $_SERVER['PHP_SELF'] . "<br>";

// Endereço IP do servidor
echo $_SERVER['SERVER_ADDR'] . "<br>";

// Nome do servidor
echo $_SERVER['SERVER_NAME'] . "<br>";

// Informações sobre o sistemas do servidor
echo $_SERVER['SERVER_SOFTWARE'] . "<br>";

// Informações sobre o protocolo usado
echo $_SERVER['SERVER_PROTOCOL'] . "<br>";

// Pasta raiz da aplicação
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";