<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar usuario</title>
  </head>
  <body>
    <style media="screen">
    body{
      background-color:#FF7F50;
    }
    </style>
    <a href="indice.html">Volver</a>
    <?php
    include 'conexion.php';
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $edad=$_POST['edad'];
    $curso=$_POST['curso'];
    $consulta="UPDATE usuarios SET nombre='$nombre',apellidos='$apellidos',edad=$edad,curso=$curso WHERE id=$id";
    $insert=$conector->query($consulta);
    $resultado=$conector->query($consulta ="SELECT * from usuarios");
    foreach ($resultado as $fila){
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
