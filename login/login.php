<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../diseno/general.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <!--method:post : Subida de archivos -->
        <form method="post">
            <div class="form-group">

            <div class="form-group">
            <h2>Iniciar sesion</h2>
            </div>   

            <div class="form-group"> 
            <input type="text" class="form-control" name="correo" placeholder="Ingresa el correo" >
            </div>
            
            <div class="form-group">
            <input type="password" class="form-control" name="contraseña" placeholder="Ingresa la contraseña" >
            </div>

            <div class="form-group"> 
                <!-- especifica el método HTTP que el navegador usará para enviar el formulario. -->
            <button input="submit" class="btn btn-primary" name="login">Acceder</button>

        </div> 
        <?php require '../login/acceso.php' ?>
            <p>Crea tu cuenta <a href="../registro/registro.php">Accede aqui</a></p>
        </div>
        </form>
    </div>
</body>
</html>