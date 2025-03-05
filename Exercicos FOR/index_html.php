<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            margin: 5px;
            background-color: rgb(200, 200, 200);
        }
    </style>
</head>
<body>
    
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <div class="card">
                <h3>Título</h3>
                <p>sdajhfdkghajhfghdfghllufgudshghfhsuagkhgouiigdshngiuhskghsjgkdhagikd</p>
            </div>
        <?php endfor;?>

</body>
</html>