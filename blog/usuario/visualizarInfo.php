<?php


require '../usuario/idNoticia.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../diseno/noticia.css">
</head>
<body>


    
<div class="box-noticia">
    <h1><?= $row['titulo'] ?></h1>
    <p><?= $row['descripcion'] ?></p>
    <img src="<?= $row['imagen'] ?>" alt="">
    <p><?= $row['contenido'] ?></p>
</div>

</div>
</body>
</html>
