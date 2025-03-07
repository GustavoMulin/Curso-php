<?php
echo '<pre>';

/* 
umas das formas mais diretas de criar e escrever
informação num ficheiro e recorrendo a função
file_put_contentes()
*/

// Se o ficheiro não existir, ele é criado.
// O contéudo vai ser esmagado.
file_put_contents('file1.txt', 'texto do ficheiro, oiiii');

// se pretendemos adicionar ifnromação ao mesmo
// ficheiro, usamos o terceiro argumento.
file_put_contents('file2.txt', time() . PHP_EOL, FILE_APPEND);
echo 'asdnjasjjjfvakmfklamskljfkalmf';