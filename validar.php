<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//CONEXION A MYSQL 
$conexion=mysqli_connect("localhost","root","usbw","medicdate");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);