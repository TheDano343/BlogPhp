<?php

    require '../../conexion/conexion.php';
    require '../administrador/visualizar.php';
   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../diseno/header.css">
    <link rel="stylesheet" href="../../diseno/dashboard.css">
</head>
<body>


    <div class="container">
        
    <?php while ($row = mysqli_fetch_array($query)): ?>

        <a href="../usuario/visualizarInfo.php?idPublicacion=<?= $row['idPublicacion']; ?>" class="card-link">
        
        <div class="card">
            <img src="<?= $row['imagen'] ?>" alt="">
            <div class="intro">
            <h1><?= $row['titulo'] ?></h1>
            <p><span><?= $row['descripcion'] ?></span></p>
                
            </div>
            </a>
        </div>
        <?php endwhile; ?>   
    </div>
    

</body>
</html>