<?php
include 'cn.php';
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//consulta
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);