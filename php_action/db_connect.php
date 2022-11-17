<?php
//conexão com db

$server = "localhost";
$root ="root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($server,$root,$password,$db_name);
mysqli_set_charset($connect,'utf8');
if(mysqli_connect_error()){
    echo "houve um erro na conexão".mysqli_connect_error() ;
    
}

