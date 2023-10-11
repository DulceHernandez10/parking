
 <?php
 
 $usuario_u=$_POST['usuario_u'];
 $password_u=$_POST['password_u'];

 session_start();
 $_SESSION['usuario_u']=$usuario_u;
 

 include 'dbconnect.php';
 $imprime_tabla= "SELECT id_e, nombre_e, estatus_e FROM espacios_e";
 


  $consulta="SELECT rol_u, usuario_u, password_u FROM usuarios WHERE usuario_u='$usuario_u' AND password_u='$password_u'";

  $resultado=mysqli_query($miConexion,$consulta);

  $filas=mysqli_num_rows($resultado);
  $fila = mysqli_fetch_array($resultado);
  $rol_u=$fila['rol_u'];

  if ($filas){
     if($rol_u=='Administrador'){
    
        header('Location:inicio_adm.php');
     }else{
        header('Location:pagina_cliente.php');
     }
  }else{
    //echo "Acceso denegado";
  ?>
  <?php 
    include("formIniciarSesion.php");
    ?>
  <?php 
  }
  
  mysqli_free_result($resultado);
  mysqli_close($miConexion);
  ?>
