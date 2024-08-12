<?php

include('conect.php');

$Rotas = "SELECT * FROM Rotas";

$QueryRotas = mysqli_query($conexao, $Rotas);

$RespQueryRotas = mysqli_query($conexao, $Rotas);

$FootQueryRotas = mysqli_query($conexao, $Rotas);
