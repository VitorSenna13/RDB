<?php

$servidor = 'localhost';
$usuario =  'root';
$senha = '22171720';
$bd = 'bd_RDB';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd)
  or die("Não foi possível conectar ao servidor MySQL");
//echo "foi, conexão feita";
