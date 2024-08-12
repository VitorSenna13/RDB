<div class="navbar">
    <div class="logo">
        <img src="../assets/img/galery/RDB_NOT_BACKGROUND.png" alt="">
    </div>

    <div class="contLinks">

        <ul>
            <?php while ($CampRotas = mysqli_fetch_array($QueryRotas)) { ?>

                <?php if ($CampRotas['idRota'] == 3 && $infoPerfil['typeUser'] !== 'Admin') { ?>

                <?php } else { ?>
                    <li>
                        <a href='<?= $CampRotas['linkRota'] ?>'>
                            <span>
                                <?= $CampRotas['nameRota'] ?>
                            </span>
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>

    </div>

    <div class="config">

        <button class="perfil" onclick="navigation('./config.php')">
            <span>
                <?= siglasNome($infoPerfil['nome'], $infoPerfil['sobrenome']) ?>
            </span>
        </button>

        <button class="hamburger">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

</div>


<div class="menuMobile">
    <div class="contHeader">
        <button class="buttonExit">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <ul>
        <?php while ($CampRotas = mysqli_fetch_array($RespQueryRotas)) { ?>

            <?php if ($CampRotas['idRota'] == 3 && $infoPerfil['typeUser'] !== 'Admin') { ?>

            <?php } else { ?>
                <li>
                    <a href='<?= $CampRotas['linkRota'] ?>'>
                        <span>
                            <?= $CampRotas['nameRota'] ?>
                        </span>
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
</div>