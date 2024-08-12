<?php

include('./conect.php');
include('./session.php');
include('./postRequest.php');
include('./functions.php');

$idPerfilTheme = $infoPerfil['idUser'];
$theme = isset($_POST['themes']) ? $_POST['themes'] : '';

$QueryTheme = "UPDATE Usuarios SET theme = $theme WHERE idUser = $idPerfilTheme ";

$AlterTheme = mysqli_query($conexao, $QueryTheme);

navigation('../config.php');
