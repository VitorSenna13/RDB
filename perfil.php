<?php

include('./php/conect.php');
include('./php/session.php');
include('./php/postRequest.php');
include('./php/functions.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDB</title>
    <link rel="shortcut icon" href="./assets/img/logo/RDB_HEADER.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/global/style.css">
    <link rel="stylesheet" href="./css/perfil/style.css">
</head>

<body>

    <div class="contPerfil">
        <div class="sgPerfil">
            <span>
                <?= siglasNome($infoPerfil['nome'], $infoPerfil['sobrenome']) ?>
            </span>
        </div>

        <div class="contInfo">

            <div class="user">
                <div class="firstName">
                    <label>Nome</label>
                    <div class="styleInputText">
                        <input type="text" name="" readonly value="<?= $infoPerfil['nome'] ?>">
                    </div>
                </div>

                <div class="surname">
                    <label>Sobrenome</label>
                    <div class="styleInputText">
                        <input type="text" name="" readonly value="<?= $infoPerfil['sobrenome'] ?>">
                    </div>
                </div>
            </div>

            <div class="email">
                <label>Email</label>
                <div class="styleInputText">
                    <input type="text" name="" readonly value="<?= $infoPerfil['email'] ?>">
                </div>
            </div>

            <div class="idUser">
                <label>ID do Funcionario</label>
                <div class="styleInputText">
                    <input type="text" name="" readonly value="<?= $infoPerfil['idFunc'] ?>">
                </div>
            </div>

        </div>


    </div>

</body>


<script>
    let theme = <?= $infoPerfil['theme'] ?>;

    window.addEventListener('load', () => {
        if (theme === 1) {
            document.body.classList.add('dark');
        }
    })
</script>

</html>