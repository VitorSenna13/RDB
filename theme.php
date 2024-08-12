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
    <link rel="stylesheet" href="./css/theme/style.css">
</head>

<body>

    <div class="contTheme">
        <form method="POST" action="<?php navigationString('./php/alterTheme.php') ?>">

            <button class="styleInputRadio" type="button">
                <span>Modo Claro</span>
                <input type="radio" id="radioThemeLight" name="themes" checked value="0" />
                <label for="radioThemeLight"></label>
            </button>

            <button class="styleInputRadio" type="button">
                <span>Modo Escuro</span>
                <input type="radio" id="radioThemeDark" name="themes" value="1" />
                <label for="radioThemeDark"></label>
            </button>

            <button type="submit" class="buttonSubmit">
                Alterar Tema
            </button>

        </form>
    </div>

    <script>
        document.querySelectorAll('.contTheme form > .styleInputRadio').forEach((obj) => {
            obj.addEventListener('click', () => {
                obj.children.namedItem('themes').checked = true;
            })
        })


        let theme = <?= $infoPerfil['theme'] ?>;

        window.addEventListener('load', () => {
            if (theme === 1) {
                document.body.classList.add('dark');
            }
        })
    </script>

    <script src="./js/renderItem.js"></script>
</body>

</html>