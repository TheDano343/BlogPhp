 <?php

$comprobacionS = $_SESSION['nombre'];//
if(!isset($comprobacionS))//
{
    header("location:../../login/login.php");//Te direccionara al login
}

?> 