<?php
require '../../login/comprobacionS.php';
require '../administrador/visualizar.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../diseno/general.css">
    <title>Document</title>
</head>
<body>
<!-- enctype="multipart/form-data" : Cuando se envían archivos binarios, como imágenes, archivos de audio, archivos de vídeo, etc., desde un formulario HTML a un servidor. -->
<form action="subir.php" enctype="multipart/form-data" method="POST"> 
    <div class="container">
        <h1 class="titulo">Crear Publicacion</h1>
        
        <div class="form-group">
        <!--name: Permite a un script acceder a su contenido. -->
        <input class="form-control" name="titulo" type="text" placeholder="Coloca titulo">
        </div>
    
        <div class="form-group">
        <input class="form-control" name="descripcion" type="text" placeholder="Coloca descripcion">
        </div>
    
        <div class="form-group">
            <textarea class="form-control" name="contenido" placeholder="Coloca contenido"></textarea>
            <!-- <input class="form-control" name="Contenido" type="text" placeholder="Coloca contenido"> -->
        </div>

        <div class="form-group">
            <input class="form-control" name="imagen" type="file" placeholder="Coloca Imagen">
        </div>
    
        <div class="form-group"> 
            <!-- especifica el método HTTP que el navegador usará para enviar el formulario -->
        <button input="submit" class="btn btn-primary" name="creacionP">Crear</button>
        <a href="../blog/blog.php" class="btn btn-dark">Regresar</a>
        
        </div> 
</form>
        </div>

</body>
</html>