<?php

require '../../conexion/conexion.php';


if(isset($_POST['btnActualizar']))
{
$id = $_POST['idPublicacion'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$contenido = $_POST['contenido'];

// similar para subir imagen
// Datos de la imagen 
$imagen = $_FILES['imagen']['name'];
//En esta seccion se coloca a que carpeta se va a subir la imagen y de que variable se va a tomar
$ruta = "../../blog/imagenes/" . $imagen;

// move_uploaded_file : Es una función de PHP que mueve un archivo cargado al servidor desde su ubicación temporal a una ubicación permanente.
// $_FILES['Imagen']['tmp_name'] : Es una variable superglobal de PHP que contiene la ruta temporal del archivo cargado en el servidor. 
// tmp_name y Imagen : es el nombre del campo de archivo en el formulario HTML.
// ruta : Es la ubicación permanente donde se desea guardar el archivo. En este caso, se construye concatenando una carpeta llamada imagenes/ con el nombre del archivo ($imagen) que se está cargando.
move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

// Para colocar la imagen o actualizar, debera colocar la variable $ruta, de las cuales estas estan tomando las imagenes
$sql = "update publicacion set 
titulo='$titulo',
descripcion='$descripcion',
contenido='$contenido', 
imagen='$ruta'
where idPublicacion='$id'";

$resultado = mysqli_query($conexion, $sql);

if ($resultado)
{
    header('Location: ../../blog/administrador/administrativo.php');
}else{
    echo "No se realizo";
}
}

?>