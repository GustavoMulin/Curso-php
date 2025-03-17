<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Formulário</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-8 card p-4 bg-light">
                <h3>Formulário</h3>
                <hr>

                <form action="submissao.php" method="post" name="formulario">
                    
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <!-- TEXT -->
                            <label class="form-label">Username</label>
                            <input class="form-control" type="text" name="text_texto">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- PASSWORD -->
                        <label class="form-label">Password </label>
                        <input class="form-control" type="password" name="text_password">
                    </div>

                    <!-- SELECT -->
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="form-label">Select</label>
                            <select class="form-select" name="select">
                                <option value="Portugal" selected>Portugal</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Alemanha">Alemanha</option>
                                <option value="Espanha">Espanha</option>
                                <option value="Inglaterra">Inglaterra</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <!-- CHECKBOX -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="check_1" id="check_1" checked value="check 1">
                                <label for="check_1" class="form-check-label">Texto da checkbox 1</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="check_2" id="check_2" value="check 2">
                                <label for="check_2" class="form-check-label">Texto da checkbox 2</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="check_3" id="check_3" value="check 3">
                                <label for="check_3" class="form-check-label">Texto da checkbox 3</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- RADIONUTTONS -->
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="radio" id="radio_1" value="opação 1">
                                <label for="radio_1" class="form-check-label">Opção 1</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="radio" id="radio_2" value="radio 2">
                                <label for="radio_2" class="form-check-label">Opção 2</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="radio" id="radio_3" value="radio 3">
                                <label for="radio_3" class="form-check-label">Opção 3</label>
                            </div>
                        </div>   
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <!-- ÁREA DE TEXTO -->
                            <label class="form-label">Área de Texto</label>
                            <textarea name="text-area" class="form-control" rows="5"></textarea> 
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12 text_center">
                            <input type="submit" value="Enviar" class="btn btn-primary px-5">
                        </div>
                    </div>
                </form>

                <div class="mt-3 text-center">
                    <span id="preencher" style="cursor: pointer;">Preencher</span>
                </div>
            </div>
        </div>
    </div>
</body>