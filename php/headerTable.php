<?php

include('conect.php');

$nameHeader = "SELECT * FROM HeaderTableRastreador";

$QueryNameHeader = mysqli_query($conexao, $nameHeader);
