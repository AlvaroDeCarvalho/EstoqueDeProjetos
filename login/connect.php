<?php
$server = "127.0.0.1";
$user = "root";
$senha  = "";
$db = "login";

$conexao = mysqli_connect($server,$user,$senha,$db);

if(mysqli_connect_error()){
    echo "erro de conexão". mysqli_connect_error();

}



/*  OUTRO METADO 
define("HOST","127.0.0.1");
define("USUARIO", "root");
define("SENHA", "");
define("DB","login");

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB);

if(mysqli_connect_error()){
    echo "nao foi possivel fazer a conexão".mysqli_connect_error()  ;
}

*/
?>

