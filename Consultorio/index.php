<?php
include("conexion.php");

$resultados = mysqli_query($conexion,'SELECT * FROM consultorio');

echo "<table border='2'>";
echo "<tr>";
echo "<th>Documento</th>";
echo "<th>Nombre</th>";
echo "<th>Apellido</th>";
echo "<th>Mutual</th>";
echo "<th>Consulta</th>";
echo "</tr>";
while($fila = mysqli_fetch_array($resultados)){
  echo "<tr>";
	echo "<td>";
	echo $fila['Documento'];
	echo "</td>";

	echo "<td>";
	echo $fila['Nombre'];
	echo "</td>";

	echo "<td>";
	echo $fila['Apellido'];
	echo "</td>";

	echo "<td>";
	echo $fila['Mutual'];
	echo "</td>";

	echo "<td>";
	echo $fila['Consulta'];
	echo "</td>";

	echo "<td>";

	    echo "<a href='FormEdito.php?titulo=".$fila['Documento']."'><img src='editar.png'></a>";
    echo "</td>";
	echo "</tr>";
}
echo "</table>";
 $conexion->close();


?>

<HTML>
<Body>

</tr>
<Script>
function listado() {
var x = document.getElementById("Documento").value;
document.cookie = "Documento=" + x;
window.location.assign("listado.php")
}

</Script>


<br>
<table>
<tr>
<td>
<button type="button" onclick="document.getElementById('FormAlta').style.display='block'"><img src="Alta.PNG"></button>

<!--<a href="FormAlta.HTML"><img src="ALTA.PNG"></a> -->


<button type="button" onclick="document.getElementById('FormBaja').style.display='block'"><img src="BAJA.PNG"></button>
<br>
</br>
<br><input id="Documento">
<br><button type="button" onclick="listado()" >Listado de Pacientes</button>
</td>
</tr>
</table>

<DIV id="FormBaja" style="display:none">
<h2>BAJA</h2>

<form action="Baja.php"  metod="get">
  Documento:<br>
  <input type="text" name="Documento" value="">
  <br>
  <input type="submit" value="Ejecutar BAJA">
</form> 
</DIV>

<DIV id="FormAlta" style="display:none">
<h2>Alta</h2>
<form action="Alta.php"  metod="get">
  Documento<br>
  <input type="text" name="Documento" value="">
  <br>
  Nombre:<br>
  <input type="text" name="Nombre" value="">
  <br><br>
  Apellido:<br>
  <input type="text" name="Apellido" value="">
  <br><br>
  Mutual:<br>
  <input type="text" name="Mutual" value="">
  <br><br>
  Consulta:<br>
  <input type="text" name="Consulta" value="">
  <br><br>







  <input type="submit" value="ALTA">
</form> 

</DIV>
</Body>
</HTML>




<!-- <a href="FormBaja.HTML"><img src="baja.PNG"></a> -->





