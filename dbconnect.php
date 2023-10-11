<?php
$host="localhost";
$user="root";
$psw="root1234";
$db="parking_inteligente";

$miConexion=mysqli_connect($host, $user,$psw,$db);
if(mysqli_errno($miConexion)){
   // echo "Fallo la conexion".mysqli_connect_error();
    
}else{
   // echo "la conexion se ha realizado";
}


?>