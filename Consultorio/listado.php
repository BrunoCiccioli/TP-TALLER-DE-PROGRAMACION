
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

    <header>
<?php
        include "componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
         
    



      <table style="width:100%">

       <tr>
            <th>Documento</th>
            <th>Nombre</th>
          	<th>Apellido</th>
            <th>Mutual</th>
            <th>Consulta</th>

          </tr>

<?php

include("conexion.php");

$resultados = mysqli_query($conexion,'SELECT * FROM consultorio');


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
