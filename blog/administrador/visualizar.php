<?php

require '../../conexion/conexion.php';

$query_Publicacion = "select * from publicacion";

$query = mysqli_query($conexion,$query_Publicacion);

?>