<?php

/* 
A função erro_log() permite escrever o que quisermos no registro
de logs de filesytem do PHP.

O PHP tem normalmente ativo o sistema de registro de logs.
Se quiseres perceber onde esse registro se encontra, podemos
executar o phpinfo() e procurar a propiedade error_log
*/

phpinfo();

/* 
O PHP vai escrevendo eventos de erro nesse ficheiro.
Se quiser escrever o teu próprio registro, pode fazê-lo.
*/
error_log('Aconteceu um erro.');

/* 
Tradicionalmente, no desenvolvimento de aplicações
vai querer usar um pacote externo que segue as normas
para o registro de logs. Um dos mais conhecidos é o
monolog. Iremos no módulo mais avançado ver como
adicionar este pacote ao nosso sistema com o composer
e como podemos usá-lo nos nossos projetos.

Existem outras funções quue permitem configurar erros.
Por agora ficamos com as fundamentais.

O importante agora é perceber como é que podemos controlar
os erros e evitar que a nossa aplicação termine por causa
de um erro.
*/