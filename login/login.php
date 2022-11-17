<?php
session_start();
include_once "connect.php";
if(isset($_POST['btn'])){


    if(empty ($_POST['usuario']) or empty($_POST['senha'] )){
        header("Location: prencher.php");
        exit();
    }
    $usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao,$_POST['senha']);
    $sql = "SELECT  * FROM usuarios WHERE usuario = '$usuario' and senha = md5($senha)";

    $result = mysqli_query($conexao, $sql);
    $row = mysqli_num_rows($result);
        if($row == 1){
            $_SESSION['usuario'] = true;
            header("Location: ../index.php");
            exit();
        }

            else{
                header("Location: prencher.php");
                exit();
            }

}

?>