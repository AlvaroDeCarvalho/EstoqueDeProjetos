<?php
//session
session_start();
//conexão
require_once "db_connect.php";

if(isset($_POST['button-editar'])){
    $id = mysqli_escape_string($connect,$_POST['id']);
    $nome = mysqli_real_escape_string($connect,$_POST['nome']);
    $endereco= mysqli_real_escape_string($connect,$_POST['endereco']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    
    
    $sql = "UPDATE info set  nome = '$nome', endereco= '$endereco', email = '$email' WHERE id = '$id' ";
    
    if(mysqli_query($connect,$sql)){
        $_SESSION['mensagem'] = "cadastrado com sucesso ";
        header("location: ../index.php ");

    

    }else{
        $_SESSION['mensagem'] = "erro no cadastro";
        header('locatio: ../index.php');
    }
}

?>