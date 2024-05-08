<?php

require '../administrador/visualizar.php';
require '../../diseno/header.php';
require '../../login/comprobacionS.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../diseno/header.css">
    <link rel="stylesheet" href="../../diseno/cards.css">
</head>
<body>

<div class="btn">
    
        <a href="publicar.php" >Crear</a>

</div>

<div class="card-container">
    <?php while ($row = mysqli_fetch_array($query)): ?>
        <div class="card">
            <img src="<?= $row['imagen'] ?>">
            <div class="card-content">
                <h3><?= $row['titulo'] ?></h3>
                <p><?= $row['descripcion'] ?></p>
                <a class="btn btn-danger" href="eliminar.php?idPublicacion=<?= $row['idPublicacion'] ?>">Borrar</a>
                <a class="btn btn-link" href="../administrador/editar.php?idPublicacion=<?=$row['idPublicacion'] ?>">Editar</a>
            </div>
        </div>
    <?php endwhile; ?>
</div> <!-- Cierra el div de card-container aquí -->


</body>
</html>