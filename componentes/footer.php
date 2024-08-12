<footer>
    <div class="contSocial">
        <div class="titleSocial">
            <span>Siga-nos nas redes sociais</span>
        </div>

        <div class="linkSocial">

            <?php while ($CampSocial = mysqli_fetch_array($QuerySocial)) { ?>

                <div class="contRS <?= $CampSocial['nomeSocial'] ?>">
                    <a href='<?= $CampSocial['direct'] ?>'>
                        <i class="<?= $CampSocial['logoSocial'] ?>"></i>
                    </a>
                    <script>
                        window.addEventListener('load', () => {
                            document.querySelector('footer .linkSocial .<?= $CampSocial['nomeSocial'] ?>').addEventListener('mouseover', () => {
                                document.querySelectorAll('footer .linkSocial > * ').forEach((obj) => {
                                    if (obj.classList[1] == '<?= $CampSocial['nomeSocial'] ?>') {
                                        obj.style.backgroundColor = '<?= $CampSocial['rdColor'] ?>';
                                        obj.style.background = '<?= $CampSocial['rdGradiente'] ?>';
                                    }
                                })

                            })
                            document.querySelector('footer .linkSocial .<?= $CampSocial['nomeSocial'] ?>').addEventListener('mouseout', (obj) => {
                                document.querySelectorAll('footer .linkSocial > * ').forEach((obj) => {
                                    if (obj.classList[1] == '<?= $CampSocial['nomeSocial'] ?>') {
                                        obj.style.backgroundColor = 'transparent';
                                        obj.style.background = 'transparent';
                                    }
                                })
                            })
                        })
                    </script>
                </div>

            <?php } ?>

        </div>

        <div class="linkPages">
            <ul>
                <?php while ($CampRotas = mysqli_fetch_array($FootQueryRotas)) { ?>

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
    </div>
</footer>