<?php
include_once("conexao.php");
$_usuario = $_POST['user'];
$_senha = $_POST['password'];
$_SESSION['logado'] = false;


$sql = "SELECT * FROM USUARIO WHERE EMAIL= '$_usuario'";
$result = mysqli_query($conexao, $sql);

if ($result) {

    $row = $result->fetch_assoc();
    if (!$row) {
        echo '<h1>Email ou senha invalida</h1>';
    } else {
        if (password_verify($_senha, $row['senha'])) {
            session_start();
            $_SESSION['logado'] = true;
            header('Location: list_contacts.php');
        } else {
            echo '<h1>Email ou senha invalida</h1>';
        }
    }
} else {
    echo "Falha ao usuario";
}
