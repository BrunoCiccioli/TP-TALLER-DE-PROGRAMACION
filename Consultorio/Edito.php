<?php
include("conexion.php");

if($_GET) {
    $f_documento = $_GET['Documento'];
// Query de actualización de la tabla         
     $sql = "UPDATE consultorio SET documento='$f_documento' WHERE Documento='$f_documento'";
	if($conexion->query($sql) === TRUE) {
        echo "<p>Registro ACTUALIZADO</p>";
        echo "<a href='../Consultorio/index.php'><button type='button'>VOLVER</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conexion->connect_error;
    }
 
    $conexion->close();
}
?>