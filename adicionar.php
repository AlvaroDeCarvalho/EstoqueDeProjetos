<!DOCTYPE html>
<?php 
session_start();
?>
  <html>
    <head>

        <meta charset="utf-8">
        <title>sistema de cadastro de cliente</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        body{
    background: #172031;
}
      </style>
    </head>
    <?php
    #verificação de login 
    if(!$_SESSION['usuario']){
        header('Location: login/prencher.php');
    }
    
    
    ?>
<div class = "row">
<div class = "col s12 m6 push-m3 ">
    <h3 class="light" style ="color:aliceblue;">Novo Cliente</h3>
<form action="php_action/create.php" method="post">
    <div class="input-field col s12">
        <input type="text" name="nome" id= "nome"  style ="color:aliceblue;">
        <label for="nome">nome</label>
    </div>
<br>
    <div class="input-field col s12">
            <input type="text" name="endereco" id= "endereco"  style ="color:aliceblue;">
            <label for="nome">endereço</label><br>        
        </div>
<br>
        
    <div class="input-field col s12">
            <input type="email" name="email" id= "email"  style ="color:aliceblue;">
            <label for="nome">Email</label>        
            </div>
    
            <button type = "submit" class = "btn" name = "button-cadastrar">Cadastrar</button>
            <a href= "index.php "type = "submit" class = "btn green">Listar Clientes</a>
            
            <a href="login/logout.php" class = "btn red" >Sair</a>
         
    
</form>

<body>    
<!--JavaScript at end of body for optimized loading-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    M.AutoInit();
</script>

</body>
</html>
</html>

