<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_usuarios";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$name = $_POST['nombre'];
$user = $_POST['user'];
$email = $_POST['email'];
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// Verificar si el correo ya está registrado
$sql_check = "SELECT id FROM usuarios WHERE email='$email'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    // Si el correo ya existe, mostrar mensaje de error
    echo "<script>alert('El correo electrónico ya está registrado. Por favor, intenta con un correo diferente.');</script>";
    echo "<script>window.location.href='index.html';</script>"; // Redirigir de vuelta al formulario
} else {
    // Si el correo no existe, insertar el nuevo usuario
    $sql = "INSERT INTO usuarios (nombre,usuario,email, password) VALUES ('$name','$user', '$email', '$pass')";
    
    if ($conn->query($sql) === TRUE) {
        // Redirigir a la página de inicio de sesión con un parámetro de éxito
        echo "<script>alert('El Registro se ha completado con éxito');</script>";
        header("Location: index.php");
        
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
