<?php
require '../../login/comprobacionS.php';
require 'seleccionarId.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Publicación</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../diseno/general.css">
</head>
<body>
<div class="container">
    <form action="edicionAccion.php" enctype="multipart/form-data" method="post">
        <h1>Editar Publicación</h1>
        <input type="hidden" name="idPublicacion" value="<?= $row['idPublicacion'] ?>">

        <div class="form-group">
            <input type="text" class="form-control" name="titulo" value="<?= $row['titulo'] ?>">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="descripcion"><?= $row['descripcion'] ?></textarea>
        </div>

        <div class="form-group">
            <textarea class="form-control" name="contenido"><?= $row['contenido'] ?></textarea>
        </div>

        <div class="form-group">
            <input class="form-control" name="imagen" type="file" id="imagen">
            <?php if (!empty($row['imagen'])): ?>
                <img src="<?= $row['imagen'] ?>" class="img-fluid mt-2" alt="imagen">
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary" name="btnActualizar">Enviar</button>
        
    </form>
</div>
</body>
</html>
