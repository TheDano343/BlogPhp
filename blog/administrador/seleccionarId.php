<?php

require '../../conexion/conexion.php';

$id = $_GET['idPublicacion'];
$sql = "SELECT * FROM publicacion WHERE idPublicacion='$id'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

?>