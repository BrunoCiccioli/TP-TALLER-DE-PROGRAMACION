<?php
include("conexion.php");

if($_GET) {
    $f_documento = $_GET['Documento'];
    $f_nombre = $_GET['Nombre'];
    $f_apellido = $_GET['Apellido'];
    $f_mutual = $_GET['Mutual'];
    $f_consulta = $_GET['Consulta'];

     
    $sql = "INSERT INTO consultorio (Documento, Nombre, Apellido, Mutual, Consulta ) VALUES ('$f_documento', '$f_nombre','$f_apellido','$f_mutual','$f_consulta')";
    if($conexion->query($sql) === TRUE) {
        echo "<p>Alta creada</p>";
        echo "<a href='index.php'><button type='button'>VOLVER</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conexion->connect_error;
    }
 
    $conexion->close();
}

