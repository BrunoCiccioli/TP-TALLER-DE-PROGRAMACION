<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Consultorio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/floating-labels.css" rel="stylesheet">

  </head>
  <style>
   
    th 
    {
      color:black;
      background-color: lightblue;
    }
    td {color:black;}
    table,th,td 
    {
     border: 2px solid black;
    text-align: center;
    }

    </style>  

    <body>


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

</main>
      
     <footer class="footer">
    <?php
        include "componentes/pie.php";
    ?>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


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





