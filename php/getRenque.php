<?php

$idRenque = isset($_GET['obj']) ? $_GET['obj'] : '';
$QueryInfo = "SELECT * FROM Bobinas WHERE id = '$idRenque'";
$info = mysqli_query($conexao, $QueryInfo);
$infoRenque = mysqli_fetch_assoc($info);
