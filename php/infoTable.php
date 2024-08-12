<?php

include('conect.php');

$infoTable = "SELECT * FROM Bobinas";

$QueryInfoTable = mysqli_query($conexao, $infoTable);
