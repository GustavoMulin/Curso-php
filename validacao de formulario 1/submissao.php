<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die ('Acesso invalido');
}

/* 
REGRAS DE VALIDAÇÃO
- Todos os cmapos são de preenchimento obrigatório exceto o textarea.
- O primeiro campo de texto tem que ser entre 5 e 30 caracteres.
- O campo da senha, tem que ser exatamente 12 caracteres.
- Das 3 checkbox, pelo menos uma tem que estar selecionada.
- Radiobuttons tem que existir uma opção selecionada.
- No caso do textarea, não é obrigatório, mas se tiver texto
  tem que ter, no mínimo, 30 caracteres.
*/

$erros = [];

// Texto
if (empty($_POST['text_texto'])) {
  $erros[] = "O campo Texto é de preenchimento obrigatório";
} else {
  if (strlen($_POST['text_texto']) < 5 || strlen($_POST['text_texto']) > 30) {
    $erros[] = "O campo tem que ter entre 5 e 30 caracteres.";
  }
}

// password
if (empty($_POST['text_password'])) {
  $erros[] = "O campo password é de preenchimento obrigatório";
} else {
  if (strlen($_POST['text_password']) != 12) {
    $erros[] = "O campo password tem que ter 12 caracteres";
  }
}

// Select
if (empty($_POST['select'])) {
  $erros[] = "Tem que estar selecionada um país";
}

// Checkbox
if (empty($_POST['check_1']) && empty($_POST['check_2']) && empty($_POST['check_3'])) {
  $erros[] = "Pelo menos uma checkbox tem que estar selecionada";
}

// radiobuttons
if (empty($_POST['radio'])) {
  $erros[] = "Tem que existir um radiobutton selecionado.";
}

// Area de texto
if (!empty($_POST['text_area']) && strlen($_POST['text_area']) < 30) {
  $erros[] = "Se vai escrever texto na área de texto, escreva, pelo menos, 30 caracteres";
}

// Apresentar os erros, se existirem, caso contrário, apresente os resultados
if (!empty($erros)) {
  echo '<h4 style="color: red;">ERROS!</h4>';
  echo '<ul>';
  foreach ($erros as $erro) {
    echo "<li>$erro</li>";
  }
  echo '<ul>';
} else {
  echo '<pre>';
  print_r($_POST);
}