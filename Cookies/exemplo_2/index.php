<?php 

// Neste exemplo muito simples, vamos usar um cookie
// Para definir o tema claro ou escuro do nosso site.

// verificar se existe um cookie com o tema
$theme = !empty($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuro || Claro</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .light {
            background-color: white;
            color: black;
        }
        .dark {
            background-color: black;
            color: white;
        }
        a {
            color: red;
        }
    </style>
</head>
<body class="<?= $theme?>">

        <a href="theme_dark.php">Dark Mode</a> | <a href="theme_light.php">Ligth Mode</a>
        <h1>Exemplo Simples de tema com cookie</h1>
        <p>akjdhashfjkdvkhbsadhfuhdngvjiahndpifjnsMIODJFPDUIGJIONFjnjdnajpvinidjvunpnvjdfonvjpifdnjvnsmdvjknfdjkkalksdkdmasklgçasjgldf</p>

</body>
</html>