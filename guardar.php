<?php
$host = "localhost"; 
$usuario = "root";
$password = "";
$base_de_datos = "Universidad"; 

$conexion = new mysqli($host, $usuario, $password, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$genero = $_POST['genero'];
$ciudad = $_POST['ciudad'];
$comentarios = $_POST['comentarios'];

$sql = "INSERT INTO estudiantes (nombre, correo, genero, ciudad, comentarios)
        VALUES ('$nombre', '$correo', '$genero', '$ciudad', '$comentarios')";

if ($conexion->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente en la base de datos.";
} else {
    echo "Error al guardar los datos: " . $conexion->error;
}

$conexion->close();
?>
