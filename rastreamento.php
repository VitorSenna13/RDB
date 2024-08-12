<?php

include('./php/conect.php');
include('./php/rotas.php');
include('./php/sociais.php');
include('./php/session.php');
include('./php/postRequest.php');
include('./php/functions.php');
include('./php/headerTable.php');
include('./php/infoTable.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreamento</title>
    <link rel="shortcut icon" href="./assets/img/logo/RDB_HEADER.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/global/style.css">
    <link rel="stylesheet" href="./css/rastreamento/style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>

<body>

    <!-- NavBar: Global -->
    <?php include('./componentes/navbar.php') ?>

    <!-- Conteúdo -->

    <div class="contPrincipal">

        <div class="contSearch">

            <div class="contInput">
                <label for="">ID</label>
                <div class="styleInput">
                    <input type="text" class="idBob">
                </div>
            </div>
            <div class="contInput">
                <label for="">Ordem de Produção</label>
                <div class="styleInput">
                    <input type="text" class="ordemProducao">
                </div>
            </div>

        </div>

        <div class="contTable">
                
                <table>
                    <thead>
                        <tr>
                            <?php while ($CampHeader = mysqli_fetch_array($QueryNameHeader)) { ?>
                                <th><?= $CampHeader['nameHeader'] ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody class="tableSearch">
                        <tr>
                            <?php while ($CampinfoTable = mysqli_fetch_array($QueryInfoTable)) { ?>
                                <td><?= $CampinfoTable['ordemProducao'] ?></td>
                                <td><?= $CampinfoTable['id'] ?></td>
                                <td><a onclick="navigationObj('<?= $CampinfoTable['linkCentroR'] ?>', '<?= $CampinfoTable['id'] ?>')"><?= $CampinfoTable['centroR'] ?></td>
                                <td><a onclick="navigationObj('<?= $CampinfoTable['linkRenque'] ?>', '<?= $CampinfoTable['id'] ?>')"><?= $CampinfoTable['renque'] ?></a></td>
                                <td><?= $CampinfoTable['ordemVendas'] ?></td>
                                <td><?= $CampinfoTable['dataEntrega'] ?></td>
                                <td><?= $CampinfoTable['codigoItem'] ?></td>
                                <td><?= $CampinfoTable['descricao'] ?></td>
                                <td><?= $CampinfoTable['etapa'] ?></td>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>

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

    <script src="./js/filter.js"></script>
    <script src="./js/responsivo.js"></script>
    <script src="./js/renderItem.js"></script>
    <script src="./js/scroll.js"></script>
    <script src="https://kit.fontawesome.com/1c9db29424.js" crossorigin="anonymous"></script>
</body>

</html>