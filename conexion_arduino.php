<?php

$host="localhost";
$user="root";
$psw="root1234";
$db="parking_inteligente";

$miConexion=mysqli_connect($host, $user,$psw,$db);
$con="INSERT INTO entradas_e (fecha_entrada, hora_entrada) VALUES (NOW(),NOW() )";

$resultado=mysqli_query($miConexion,$con);
  if ($resultado){
    echo "Registro exitoso";
  }else{
    echo "Registro no realizado";
  }



?>