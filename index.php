<?php

include('./php/conect.php');

if (isset($_POST['usuario']) || isset($_POST['senha'])) {

    if (strlen($_POST['usuario']) == 0) {
        echo 'Preencha seu Usuário';
    } else if (strlen($_POST['senha']) == 0) {
        echo 'Preencha sua Senha';
    } else {

        $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

        $sql_code = "SELECT * FROM Usuarios WHERE email = '$usuario' AND idFunc = '$senha'";
        $sql_query = mysqli_query($conexao, $sql_code);

        $quantidade = mysqli_num_rows($sql_query);

        if ($quantidade == 1) {

            $userLog = mysqli_fetch_assoc($sql_query);

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $userLog['idUser'];

            header('Location: ./home.php');
        } else {
            echo 'Falha ao Logar! Usuário ou Senhas Incorretos';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="./assets/img/logo/RDB_HEADER.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/login/style.css">
</head>


<body>
    <div class="container">

        <form action="" method="POST">
            <img src="./assets/img/logo/RDB_HEADER.png" alt="">
            <div class="user">
                <label for="">Usuário</label>
                <div class="styleInput">
                    <input name="usuario" type="text">
                </div>
            </div>
            <div class="senha">
                <label for="">Senha</label>
                <div class="styleInput">
                    <input name="senha" type="password">
                </div>
            </div>

            <button type="submit">Entrar</button>

        </form>

    </div>
</body>

</html>