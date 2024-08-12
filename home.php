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
    <title>RDB</title>
    <link rel="shortcut icon" href="./assets/img/logo/RDB_HEADER.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/home/style.css">
    <link rel="stylesheet" href="./css/global/style.css">
</head>

<body>

    <!-- NavBar: Global -->
    <?php include('./componentes/navbar.php') ?>

    <!-- Conteúdo -->
    <div class="apsCont">
        <div class="apsImg">
            <img src="./assets/img/galery/RDB_NOT_BACKGROUND.png" alt="">

            <div class="apsText">
                <span>Encontre a Bobina que você quer, clicando no botão abaixo:</span>
                <button class="navRastrear" onclick="navigation('./rastreamento.php')">Ir para página de
                    rastreamento</button>
            </div>
        </div>
    </div>

    <div class="contInfo">
        <div class="contFaleConosco" id="faleConosco">
            <div class="faleConoscoInfo">
                <div class="contText">
                    <span>
                        Report algum problema na aplicação...
                    </span>

                    <button onclick="navigation('./faleConosco.php')">Fale Conosco</button>
                </div>
                <div class="contImg">
                    <img src="./assets/img/galery/teste/imagemTeste.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer: Global -->
    <?php include('./componentes/footer.php') ?>


    <script>
        let theme = <?= $infoPerfil['theme'] ?>;

        window.addEventListener('load', () => {
            if (theme === 1) {
                document.body.classList.add('dark');
            }
        })
    </script>

    <script src="./js/responsivo.js"></script>
    <script src="./js/renderItem.js"></script>
    <script src="./js/scroll.js"></script>
    <script src="https://kit.fontawesome.com/1c9db29424.js" crossorigin="anonymous"></script>
</body>

</html>