<?php
include("conexion.php");

if($_GET) {
    $f_documento = $_GET['Documento'];
         
    $sql = "DELETE FROM consultorio WHERE Documento='$f_documento'";
    if($conexion->query($sql) === TRUE) {
        echo "<p>Registro borrado</p>";
        echo "<a href='index.php'><button type='button'>VOLVER</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conexion->connect_error;
    }
 
    $conexion->close();
}
?>