<?php
$con=mysqli_connect('localhost','root','','practica-ing-web') or die('Error en la conexión con el servidor');
$sql="INSERT INTO registros VALUES('".$_POST["nombre"]."','".$_POST["correo"]."',".$_POST["telefono"].",'".$_POST["mensaje"]."')";
$resultado mysqli_query($con,$sql)or die('Error en el query database');
mysqli_close($con);

echo 'El nombre ingresado es: '.$_POST["nombre"];
echo 'El correo es:'.$_POST["correo"];
echo 'El telefono es:'.$_POST["telefono"];
?>