<?php


  /*mysql-->ya cambio a "mysqli"
  mysqli_query();
  mysqli_select_db();

  $sql='SELECT foo FROM bar WHERE id=42';
  $resultado=mysqli_query($sql,$conection);

  mysqli_close($nombreConexion);
  **************************Crear base de datos en comandos***************
  mysql> create database datos;
Query OK, 1 row affected (0.45 sec)

mysql> use datos;
Database changed
mysql> create table alumno (id int(4) primary_key,nombre varchar(50), apellido varchar(50), edad int(2));
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'primary_key,nombre varchar(50), apellido varchar(50), edad int(2))' at line 1
mysql> create table alumno (id int(4) primary key,nombre varchar(50), apellido varchar(50), edad int(2));
Query OK, 0 rows affected, 2 warnings (1.30 sec)

mysql> show tables;
+-----------------+
| Tables_in_datos |
+-----------------+
| alumno          |
+-----------------+
1 row in set (0.53 sec)
mysql> insert into alumno (id,nombre,apellido,edad) values (1, 'jose','Ruiz',25);
Query OK, 1 row affected (0.39 sec)

  */

 
 $nombre_u=$_GET['nombre_u'] ;
 $apellido_u=$_GET['apellido_u'] ;
 $domicilio_u=$_GET['domicilio_u'] ;
 $puesto_u=$_GET['puesto_u'] ;
 $rol_u=$_GET['rol_u'] ;
 $usuario_u=$_GET['usuario_u'] ;
 $password_u=$_GET['password_u'] ;
 $foto_u=$_GET['foto_u'];

//*******INSETAR DATO************
  $consulta="INSERT INTO usuarios (nombre_u,apellido_u, domicilio_u, puesto_u, rol_u, usuario_u, password_u, foto_u) VALUES ('$nombre_u','$apellido_u','$domicilio_u', '$puesto_u', '$rol_u', '$usuario_u','$password_u', '$foto_u')";

  //********ELIMINAR DATO************
  //$consulta="DELETE FROM alumno WHERE id='1'";
  include 'dbconnect.php';
  $resultado=mysqli_query($miConexion,$consulta);
  if ($resultado){
    //echo "Registro exitoso";
  }else{
    //echo "Registro no realizado";
  }
  mysqli_close($miConexion);
  header('Location:Ver_usuarios.php');
  

?>