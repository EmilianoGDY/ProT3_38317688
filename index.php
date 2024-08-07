<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <!-- Links de Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <!-- Link del Javascript -->
    
    
</head>
<body>
    <h1>Bienvenido a Tus Clases de Guitarra</h1>
    <h3>Por Favor Ingrese sus datos de usuario para Iniciar Sesion</h3>
    <div class="Principal d-flex justify-content-center">
        <form action="validar.php" class="d-flex flex-column flex-wrap" method="post">
            <h1>Tus Clases de Guitarra</h1>

            <label for="">Usuario</label>
            <input type="text" class="input" placeholder="Escriba su Usuario" id="usuario" name="usuario">

            <label for="">Contraseña</label>
            <input type="password" class="input" placeholder="Escriba su Contraseña" id="pass" name="password">

            <input class="btn btn-success" type="submit" value="INICIAR SESION">

            <a href="registro.php" class="btn btn-info">REGISTRARSE</a>
            
        </form>



    </div>
</body>
</html>