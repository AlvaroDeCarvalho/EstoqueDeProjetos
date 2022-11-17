<?php
//conexão
require_once "db_connect.php";

if(isset($_POST['button-cadastrar'])){

    $nome = mysqli_real_escape_string($connect,$_POST['nome']);
    $endereco= mysqli_real_escape_string($connect,$_POST['endereco']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    
    //inserindo na tabela clientes 

    $sql = "INSERT INTO info (nome, endereco, email) values ('$nome','$endereco','$email')";
    
    if(mysqli_query($connect,$sql)){
        $_SESSION['mensagem'] = "cadastrado com sucesso ";
        header("location: ../index.php ");

    

    }else{
        $_SESSION['mensagem'] = "erro no cadastro";
        header('locatio: ../index.php');
    }
}

?>