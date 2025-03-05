<?php 

$nomes = ["joão", "ana", "carlos", "francisco", "maria"];
$ignorar = "carlos";

foreach ($nomes as $nome) {
    if ($nome == $ignorar) continue;
   echo "$nome<br>";
}