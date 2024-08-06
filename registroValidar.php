<?php session_start();
include('db.php');

//Code for Registration 
if(isset($_POST['submit']))
{
    $usuario=$_POST['user'];
    $password=$_POST['pass'];
    $email=$_POST['email'];
    $nombre=$_POST['nombre'];
    
$sql=mysqli_query($con,"select usuario from usuarios where email='$email'");
$row=mysqli_num_rows($sql);

// $consulta="SELECT usuario FROM usuarios where email='$email'";
// $resultado=mysqli_query($conexion,$consulta);

// $row=mysqli_num_rows($resultado);

if($row>0)
{
    echo "<script>alert('Este email ya existe registrado. Por favor intente con una direccion de correo diferente');</script>";
} else{
    $msg=mysqli_query($con,"insert into usuarios(usuario,password,email,nombre) values('$usuario','$password','$email','$nombre')");

if($msg)
{
    echo "<script>alert('Se ha Registrado con Exito');</script>";
    header("location:index.php");
    // echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
}
}
?>