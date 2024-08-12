<?php

include('conect.php');

$Social = "SELECT * FROM RdSociais";

$QuerySocial = mysqli_query($conexao, $Social);
