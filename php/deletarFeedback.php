<?php

include('./conect.php');
include('./functions.php');
include('./postRequest.php');

$id = isset($_GET['idFeed']) ? $_GET['idFeed'] : '';

$QueryDeletar = "DELETE FROM Feedback WHERE idFeedback = '$id'";
$deletar = mysqli_query($conexao, $QueryDeletar);


navigation('../feedback.php');
