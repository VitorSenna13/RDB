<?php

include('./php/conect.php');
include('./php/rotas.php');
include('./php/sociais.php');
include('./php/session.php');
include('./php/postRequest.php');
include('./php/functions.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <link rel="shortcut icon" href="./assets/img/logo/RDB_HEADER.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/faleConosco/style.css">
    <link rel="stylesheet" href="./css/global/style.css">
</head>

<body>

    <!-- NavBar: Global -->
    <?php include('./componentes/navbar.php') ?>

    <!-- Conteúdo -->

    <div class="contFaleConosco">

        <form class="formReport" method="POST" action=" <?php navigationString('./php/insertFeedback.php', $infoPerfil['idUser']) ?>">

            <span class="titleReport">
                Report
            </span>

            <div class="user">
                <div class="firstName">
                    <label>Nome</label>
                    <div class="styleInputText">
                        <input type="text" name="nome" readonly value="<?= $infoPerfil['nome'] ?>">
                    </div>
                </div>

                <div class="surname">
                    <label>Sobrenome</label>
                    <div class="styleInputText">
                        <input type="text" name="sobrenome" readonly value="<?= $infoPerfil['sobrenome'] ?>">
                    </div>
                </div>
            </div>

            <div class="email">
                <label>Email</label>
                <div class="styleInputText">
                    <input type="text" name="email" readonly value="<?= $infoPerfil['email'] ?>">
                </div>
            </div>

            <div class="idFunc">
                <label>ID do Funcionario</label>
                <div class="styleInputText">
                    <input type="text" name="idFunc" readonly value="<?= $infoPerfil['idFunc'] ?>">
                </div>
            </div>

            <div class="assunto">
                <label>Qual o problema?</label>
                <div class="styleInputText">
                    <input type="text" name="assunto">
                </div>
            </div>

            <div class="report">
                <label>Nos conte mais sobre o problema</label>
                <div class="styleInputText">
                    <textarea name="report" maxlength="8000"></textarea>
                </div>
            </div>

            <div class="buttonSubmit">
                <button type="submit">
                    Enviar
                </button>
            </div>

        </form>

    </div>

    <!-- Footer: Global -->
    <?php include('./componentes/footer.php'); ?>


    <script>
        let theme = <?= $infoPerfil['theme'] ?>;

        window.addEventListener('load', () => {
            if (theme === 1) {
                document.body.classList.add('dark');
            }
        })
    </script>

    <script src="./js/renderItem.js"></script>
    <script src="./js/scroll.js"></script>
    <script src="./js/responsivo.js"></script>
    <script src="https://kit.fontawesome.com/1c9db29424.js" crossorigin="anonymous"></script>
</body>

</html>