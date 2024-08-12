<?php

$idPerfil = isset($_SESSION['id']) ? $_SESSION['id'] : '';
$QueryInfo = "SELECT * FROM Usuarios WHERE idUser = '$idPerfil'";
$info = mysqli_query($conexao, $QueryInfo);
$infoPerfil = mysqli_fetch_assoc($info);
