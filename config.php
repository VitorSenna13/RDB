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
    <link rel="stylesheet" href="./css/config/style.css">
    <link rel="stylesheet" href="./css/global/style.css">
</head>

<body>
    <div class="contConfig">
        <div class="sgPerfil">
            <span>
                <?= siglasNome($infoPerfil['nome'], $infoPerfil['sobrenome']) ?>
            </span>
        </div>

        <div class="contOption">
            <button class="option" onclick="navigation('./perfil.php')">
                <span>
                    Perfil
                </span>
            </button>
            <button class="option" onclick="navigation('./theme.php')">
                <span>
                    Temas
                </span>
            </button>
            <button class="option" onclick="navigation('./home.php')">
                <span>
                    Página Inicial
                </span>
            </button>

            <button class="logOff" onclick=" logOut() ">
                <span>
                    Sair
                </span>
            </button>

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

<script src="./js/renderItem.js"></script>

</html>