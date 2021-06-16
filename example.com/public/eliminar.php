<?php
require("../public/conexion.php");
require("../includes/constants.php");
require("../includes/functions.php");
//Hace conexión con la base de datos
include("conexion.php");
//Hace la variable "ID"
  $pan= $_GET["id"];
//Selecciona a usuarios a partir de la ID para evitar borrar en cuyo caso haya datos repetidos (ya que la ID no se repite)
  $query="DELETE FROM productos WHERE id='$pan'";
  //Acá nos dice básicamente que si todo sale bien nos va a llevar a la tabla donde vamos a ver que el usuario se eliminó con exito
  $resultado= $conexion->query($query);
?>
