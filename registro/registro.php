<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../diseno/general.css">  


    <title>Registro</title>
    
</head>

<body>

    <div class="container">
        <form id="form" method="post"> 
            

            <div class="form-group">
            <h2>Registro de usuario</h2>
            </div>    

            <div class="form-group"> 
                <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre" id="nombre">
                <span id="nombre_error"></span>
            </div>

            <div class="form-group"> 
                <input type="text" class="form-control" name="correo" placeholder="Ingresa el correo" id="correo">
                <span id="correo_error"></span>
            </div>
            
            <div class="form-group">
            <input type="password" class="form-control" name="contraseña" placeholder="Ingresa la contraseña" id="contraseña">
            <span id="contrasena_error"></span>
            </div>

            <div class="form-group"> 
            <button type="submit" class="btn btn-primary" name="registro" id="Enviar">Acceder</button>
                
        </div> 
            
            <p>Accede a tu cuenta <a href="../login/login.php">click aqui</a></p>
            <div id="respuesta"></div>

            <script src="../js/validaciones.js"></script>

            <?php
                    require '../registro/registroEnvio.php'
            ?>
            
      </div>
     </form>
    </div>
</body>
</html>
