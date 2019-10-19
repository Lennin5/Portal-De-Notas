<?php

error_reporting(E_ALL);
ini_set('display_errors' , 'On');

$conexion = mysqli_connect("localhost","root","","segundoa") or
die("problemas con la conexion");
$notas = mysqli_query($conexion, "select nombre, apellido, grado, asignatura, A, A2, A3, A4, PA, PF from
notas") or die("Problemas con las slq" .mysqli_error($conexion));

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="utf-8">
    <title>Notas</title>
    <link rel="stylesheet" href="css/materialize.css">

  </head>
  <body>
<br>

    <a class="waves-effect waves-light btn"
    href="http://localhost/segundoinso/Notas/notas.php" class="btn btn-primary">Inicio</a>
<br>
    <div class="container">
      <div class="row">

      <?php
      while($reg = mysqli_fetch_array($notas))
      {
      ?>

          <div class="col s4">
            <?php
            echo "Nombre: ".$reg['nombre'] ."<br>";
            echo "Apellido: " .$reg['apellido'] ."<br>";
            echo "Grado: " .$reg['grado'] ."<br>";
            echo "Asignatura: " .$reg['asignatura'] ."<br>";
            echo "A: " .$reg['A'] ."<br>";
            echo "A2: " .$reg['A2'] ."<br>";
            echo "A3: " .$reg['A3'] ."<br>";
            echo "A4: " .$reg['A4'] ."<br>";
            echo "PA: " .$reg['PA'] ."<br>";
            echo "PF: " .$reg['PF'] ."<br><br>";

            ?>
          </div>



      <?php
      }
      echo "<br>";
      mysqli_close($conexion);
       ?>
    </div>
  </body>
</html>
