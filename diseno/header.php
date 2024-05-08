<?php
        session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../diseno/header.css"> -->
</head>

<body>
        
        <!-- Seleccion -->
        <nav class="main-nav">
            <div id="toggle-menu" class="toggle-menu">
            <label for="toggle-menu-checkbox">
                <img src="../../diseno/assets/simbolo.png" alt="" />
            </label>
            </div>

            <input
             type="checkbox" 
                class="toggle-menu_checkbox"
                id="toggle-menu-checkbox"
                />

            <ul id="main-menu" class="main-menu">
            <li class="main-menu_item">
                <a class="main-menu_link" href="../../../blogP/blog/usuario/landingPage.php">Inicio</a>
            </li>

            <li class="main-menu_item">
                <a class="main-menu_link" href="administrativo.php">Administrativo</a>
            </li>

            <li class="main-menu_item">
                <a class="main-menu_link" href="../../cerrar.php">Cerrar</a>
            </li>
            </ul>
        </nav>
</body>

</html>


        <div class="nombre"> 
            <a class="nav-link"><?php echo $_SESSION['nombre']; ?></a>
        </div>