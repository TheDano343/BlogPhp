<?php
require '../conexion/conexion.php';

// Validamos que el formulario y que el boton login haya sido presionado, todo esto si isset tiene el name de button


if(isset($_POST['registro']))
{
    $nombreCompleto = $_POST['nombre'];
    $correoE = $_POST['correo'];
    $contrasena = $_POST['contraseña'];

    $sql_verificar = "SELECT correo FROM login where correo = '$correoE'";
                      
    $verificar_registro = mysqli_query($conexion, $sql_verificar);
    if(mysqli_num_rows($verificar_registro) > 0)
    {
        ?>
       <p>"El correo ya existe";</p>
       <?php
    }else{
    
    $contrasenia_fuerte = password_hash($contrasena, PASSWORD_DEFAULT);
   
    
    $sql = "INSERT INTO login(nombre, correo, contraseña) VALUES ('$nombreCompleto','$correoE', '$contrasenia_fuerte')";
    
    
    $resultado = mysqli_query($conexion, $sql);
        if($resultado)
        {
            ?>
           <p>  "Registro realizado"</p>
            <?php
        }else{
            ?>
           <p> "Se inserto incorrectamente los datos."."<br>";
           "Error: " . $sql . "<br>" . mysqli_error($conexion);//devuelve el error
            <p>
            <?php
        }
    }
    
}   


?>