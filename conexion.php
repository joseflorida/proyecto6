<?php
$server="localhost";
$user="root";
$pas="";
$db="juegos";
$conector=new mysqli ("localhost","root","","juegos");
if ($conector-> connect_errno) {
  echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
}
 ?>
