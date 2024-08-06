<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
        <!-- Links de Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Link Estilos CSS -->
    <link rel="stylesheet" href="login.css">
    <!-- Links Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+NG+Modern:wght@100..400&display=swap" rel="stylesheet">
</head>
<body>  
<h1>Bienvenido a Tus Clases de Guitarra</h1>
    <h3>Por Favor Ingrese sus datos para Crear una Cuenta</h3>
    <div class="Principal d-flex justify-content-center">
        <form action="registroValidar.php" class="d-flex flex-column flex-wrap" method="post">
            <h1>Tus Clases de Guitarra</h1>

            <label for="">Nombre Completo</label>
            <input type="text" class="input" placeholder="Escriba su Nombre Completo" id="pass" name="nombre">

            <label for="">Email</label>
            <input type="email" class="input" placeholder="Escriba su Contraseña" id="pass" name="email">

            <label for="">Usuario</label>
            <input type="text" class="input" placeholder="Escriba su Usuario" id="usuario" name="user">

            <label for="">Contraseña</label>
            <input type="password" class="input" placeholder="Escriba su Contraseña" id="pass" name="pass">


            <input class="btn btn-success" type="submit" value="REGISTRARSE">

            
            
        </form>





    
</body>
</html>