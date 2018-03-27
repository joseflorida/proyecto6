<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de usuarios</title>
  </head>
  <body>
    <style media="screen">
    body{
      background-color:#009900;
    }
    </style>

    <a href="indice.html">Volver</a>
<?php
include 'conexion.php';
$resultado=$conector->query($consulta ="SELECT * from usuarios");
foreach ($resultado as $fila) {
  echo"<br>Id: ".$fila["id"];
  echo"<br>Nombre: ".$fila["nombre"];
  echo"<br>Apellidos: ".$fila["apellidos"];
  echo"<br>Edad: ".$fila["edad"];
  echo"<br>Curso: ".$fila["curso"];
  echo"<br>Puntuación: ".$fila["puntuacion"];
  echo"<br>";
  }
 ?>
  </body>
</html>
