<?php

include('./php/conect.php');
include('./php/rotas.php');
include('./php/sociais.php');
include('./php/session.php');
include('./php/postRequest.php');
include('./php/requestFeedback.php');
include('./php/functions.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDB</title>
    <link rel="stylesheet" href="./css/global/style.css">
    <link rel="stylesheet" href="./css/feedback/style.css">
    <link rel="shortcut icon" href="./assets/img/logo/RDB_HEADER.png" type="image/x-icon">
</head>

<body>

    <!-- NavBar: Global -->
    <?php include('./componentes/navbar.php') ?>

    <!-- Conteúdo -->

    <div class="container">
        <span>Feedbacks</span>

        <div class="contCard">

            <?php while ($CampFeedback = mysqli_fetch_array($QueryFeedbacks)) { ?>
                <div class="cardFeed">
                    <div class="headerCard">
                        <div class="sigPerfil">
                            <span>
                                <?= siglasNome($CampFeedback['nomeFunc'], $CampFeedback['sobrenomeFunc']) ?>
                            </span>
                        </div>
                        <div class="assuntoCard">
                            <span>
                                <?php filterDesc($CampFeedback['assunto']) ?>
                            </span>
                        </div>
                        <button class="deletarFeed" onclick="navigationDeletar('./php/deletarFeedback.php', <?= $CampFeedback['idFeedback'] ?>, <?= $infoPerfil['idUser'] ?>)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>

                    <div class="contDescCard">
                        <span>
                            ID do Funcionario: <?= $CampFeedback['idFunc'] ?> </br>
                            Email: <?= $CampFeedback['emailFunc'] ?> </br>

                            </br> Report: <?= $CampFeedback['report'] ?>
                        </span>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>

    <!-- Footer: Global -->
    <?php include('./componentes/footer.php') ?>

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
<script src="https://kit.fontawesome.com/1c9db29424.js" crossorigin="anonymous"></script>
<script src="./js/responsivo.js"></script>

</html>