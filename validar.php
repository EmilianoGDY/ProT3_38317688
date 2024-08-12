<?php

$usuario=$_POST['usuario'];
$password=$_POST['password'];

session_start();

$_SESSION['usuario']= $usuario;

include('db.php');

$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$password'" ;
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if($filas){
    $_SESSION['usuario'] = $usuario;
    header("location:inicio.php");
}else{
    ?>
    <?php
    include("index.php");
    echo "<script>alert('Los Datos proporcionados no son Correctos. Intente Nuevamente');</script>";
    ?>
    
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);