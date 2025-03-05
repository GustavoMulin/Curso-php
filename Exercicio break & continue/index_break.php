<?php 

$pare = 5;
for ($i = 0; $i <= 10; $i++) {
    echo "$i<br>";
    if($i == $pare) {
        break;
    }
}

$nomes = ["joão", "ana", "carlos", "francisco", "maria"];
$nomeInterrompa = "carlos";
foreach($nomes as $nome) {
    echo "$nome<br>";
    if ($nome == $nomeInterrompa) break;
}