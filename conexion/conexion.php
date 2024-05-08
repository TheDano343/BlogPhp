<?php

// La manera mas facil
$servidor="localhost";
$usuario="root";
$contraseña = "";
$base_de_datos = "blogp";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos); // mysqli_connect : ntenta abrir una conexión al servidor MySQL que se está ejecutando en equipo_afitrión

if (!$conexion){
    die("Conexion fallida: " . mysqli_connect_error()); // mysqli_connect_error : regresará un mensaje de error, representando el último error ocurrido para la conexió de base de datos
}



?> 



