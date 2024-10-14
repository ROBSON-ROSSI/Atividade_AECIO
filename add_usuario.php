<?php 
include_once('conexao.php');
$usuario = $_POST['user'];
$senha =  password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql = "INSERT INTO USUARIO (EMAIL,SENHA) VALUES ('$usuario','$senha')";
$result = mysqli_query($conexao,$sql);

if ($result){
    echo "<scrip>alert('Cadastro realizado com sucesso')</script>";
    header('Location: index.php');
} else {
    echo "<scrip>alert('Falha ao realizar o cadasdtro')</script>";
    header('Location: index.php');
}



?>