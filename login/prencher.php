<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>*{
    margin: 0;
    padding:0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: #172031;
}
.login{
    background: rgba(0,0,0,.5);
    border-radius: 10px;
    width: 400px;
    padding: 40px;
}
.login h2{
    color: #fff;
    margin-bottom: 30px;
    font-size: 30px;
    text-align: center;
}
.login .box-user{
    position: relative;

}
.login .box-user input{
    width: 100%;
    padding: 10px 0;
    outline: none;
    border: 0;
    background: transparent;
    border-bottom: 1px solid #fff;
    color:#fff;
    font-size: 16px;
    margin-bottom: 30px;
}
.login .box-user label{
    position: absolute;
    top: 0;
    left: 0; 
    padding: 10px 0;
    color: #fff;
    font-size: 16px;
    pointer-events: none;
    transition: .5s;
}
.login .box-user input:focus~label,
.login .box-user input:valid~label{
    top: -20px;
    left: 0;
    color: #03e9f4;
    font-size: 12px;
}

</style>
<link rel="stylesheet" href="btn.css">
</head>
<body>
    <form action="login.php" method="POST" class= "login">
    <h2>login</h2>
        <div class ="box-user">
        <input type="text" name = "usuario"><br>
        <label for="">usuario</label>
        </div>
        <div class="box-user">
        <input type="password" name = "senha"><br>
        <label for="">senha</label>
        </div>
        
        <button class="btn" name = "btn">enviar</button>
    </form>
</body>
</html>