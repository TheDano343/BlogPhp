<?php 
require '../../conexion/conexion.php';

if(isset($_POST['creacionP'])) {
    
    $Titular = $_POST['titulo'];
    $DescripcionT = $_POST['descripcion'];
    $ContenidoT = $_POST['contenido'];

    $img = $_FILES['imagen']['name'];
   
    $archivo = $_FILES['imagen']['tmp_name'];

    $ruta = "../../blog/imagenes/".$img;
   
    move_uploaded_file($archivo, $ruta);

    $sql = "INSERT INTO publicacion (titulo, descripcion, contenido, imagen) VALUES ('$Titular', '$DescripcionT', '$ContenidoT', '$ruta')";
                    
$estado = mysqli_query($conexion, $sql);
if($estado)
{
    header("Location: administrativo.php");
}else{
    echo "No se publico"."<br>";
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);//devuelve el error
}

}
?>