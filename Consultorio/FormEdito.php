<?php
include("conexion.php");

if($_GET) {
    $f_documento = $_GET['documento'];
	$query= 'SELECT * FROM consultorio WHERE Documento="'.$f_documento.'"';     
	$resultados=mysqli_query($conexion,"SELECT * FROM consultorio WHERE Documento=".$f_documento);
	$fila = mysqli_fetch_array($resultados);
	$conexion->close();
}
?>
<!-- Formulario para modificar los datos -->
<HTML>
<Body>
<form action="../Consultorio/Edito.php"  metod="get">
<p name="Documento">Documento:<?php echo $f_documento; ?></p>
<br>
<p>Documento: <input type="text" name="Documento" value=<?php echo $fila['Documento']; ?>></p>
<br>
 <input type="submit" value="ACTUALIZAR">
</form> 
 </Body>
 </HTML>