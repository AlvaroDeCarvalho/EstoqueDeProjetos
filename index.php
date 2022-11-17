<?php 
session_start();
include "php_action/db_connect.php"
?>


<!DOCTYPE html>
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
//mensagem 
include_once "mensagem/messagem.php";

//verifcação se foi feito o login 

if(!$_SESSION['usuario']){
    header('Location: login/prencher.php');
}


?>

<div class = "row">
<div class = "col s12 m6 push-m3 ">
    <h3 class="light" style ="color:aliceblue;">clientes</h3>

    <table class ="striped grey">
        <thead>
            <tr>
            <th>nome:</th>
            <th>endereço:</th>
            <th>Email:</th>
            

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM info";
            $resultado = mysqli_query($connect,$sql);
            while($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr>
        <td ><?php echo $dados['nome'];  ?> </td>
        <td><?php echo $dados['endereco'];?></td>
        <td><?php echo $dados['email'];  ?></td>
        <td><a href="editar.php?id=<?php echo $dados['id']?>" class = "btn-floating orange"><i class= "material-icons">edit</i></a></td>

        <td><a href="#modal<?php echo $dados['id']; ?>"class = "btn-floating red  modal-trigger"><i class= "material-icons">delete</i></a></td>

                        <!-- Modal Structure -->
        <div id="modal<?php echo $dados['id']?>" class="modal">
            <div class="modal-content">
            <h4>Obs!</h4>
            <p>tem certeza que deseja excluir este cliente?</p>
            </div>
            <div class="modal-footer">
            
           
            <form action="php_action/delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id']?>">
                <button type="submit" name = "btn-deletar" class = "btn red">Sim</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
            
            </form>
            </div>
        </div>

        <?php endwhile; ?>
        </tr>
        </tbody>
    </table>
    <br>
    <a href="adicionar.php" class= "btn">Adicionar clientes</a>
    <a href="login/logout.php" class = "btn red">Sair</a>


    <body>    
<!--JavaScript at end of body for optimized loading-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    M.AutoInit();
</script>

</body>
</html>
</html>



