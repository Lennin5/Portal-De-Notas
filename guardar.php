<?php
  error_reporting(E_ALL);
  ini_set('display_errors' , 'On');
  $nombre = $_REQUEST['nombre'];
  $apellido = $_REQUEST['apellido'];
  $grado = $_REQUEST['grado'];
  $asignatura = $_REQUEST['asignatura'];
  $A = $_REQUEST['A'];
  $A2 = $_REQUEST['A2'];
  $A3 = $_REQUEST['A3'];
  $A4 = $_REQUEST['A4'];
  $PA = $_REQUEST['PA'];
  $PF = $_REQUEST['PF'];
  $conexion = mysqli_connect ("localhost","root","","segundoa")
  or die ("Problemas con la conexion");
  mysqli_query($conexion, "insert into notas(nombre,apellido,grado,asignatura,A,A2,A3,A4,PA,PF)
  value('$nombre','$apellido','$grado','$asignatura','$A','$A2','$A3','$A4','$PA','$PF')") or die ("Problemas con la Query". mysqli_error($conexion));
  echo "Notas Guardadas"

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="css/materialize.css">
  <body>
    <br>
    <a class="waves-effect waves-light btn"
    href="http://localhost/segundoinso/Notas/notas.php" class="btn btn-primary">Volver</a>

    <a class="waves-effect waves-light btn"
    href="http://localhost/segundoinso/Notas/leer.php" class="btn btn-primary">Ver Registros</a>
  </body>
</html>
