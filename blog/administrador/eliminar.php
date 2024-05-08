<?php
require '../../conexion/conexion.php';

$id = $_GET['idPublicacion'];

$eliminacion = "delete from publicacion where idPublicacion='$id'";

$query = mysqli_query($conexion, $eliminacion);

if($query)
{
    
    Header("Location: administrativo.php");
}
?>