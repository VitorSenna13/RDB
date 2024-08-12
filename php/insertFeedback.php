<?php

include('./conect.php');
include('./functions.php');

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$idFunc = isset($_POST['idFunc']) ? $_POST['idFunc'] : '';
$assunto = isset($_POST['assunto']) ? $_POST['assunto'] : '';
$report = isset($_POST['report']) ? $_POST['report'] : '';

$ScriptInsert = "INSERT INTO Feedback VALUES ( null, '$nome', '$sobrenome', '$idFunc', '$email', '$assunto', '$report')";

$QueryInsert = mysqli_query($conexao, $ScriptInsert);

navigation('../faleConosco.php');
