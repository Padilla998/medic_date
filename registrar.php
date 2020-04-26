<?php
include 'cn.php';
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contraseña"];
$telefono = $_POST["telefono"];

$insertar = "INSERT INTO usuarios( nombre, apellido, correo, username, contrasena, telefono) VALUES ('$nombre','$apellidos','$correo','$usuario','$contrasena','$telefono')";

$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usurname = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0){
    mysqli_error($verificar_usuario);
}

$resultado = mysqli_query($conexion, $insertar) or die (mysqli_error($conexion));
if (!$resultado){
    echo "Error";
}else{
    echo ' Datos guardados';
}

mysqli_close($conexion);