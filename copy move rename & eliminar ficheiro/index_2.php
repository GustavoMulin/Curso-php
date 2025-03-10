<?php 

// COPIAR, MOVER, RENOMEAR E ELIMINAR FICHEIROS

// Para mover um ficheiro (a cópi duplica), usamos a função rename
rename(__DIR__ . '/file_to_move.nfo', __DIR__ . '/destino/file_to_move');

// Esta função serve também para renomear o fichiero, desde que seja mantia a path
rename(__DIR__ . '/file_to_move.nfo', __DIR__ . '/new_file_to_move.nfo');