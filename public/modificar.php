<?php
require("../includes/constants.php");
require("../includes/functions.php");
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$imagen=$_POST["imagen"];
$color=$_POST["color"];
$editar=query("UPDATE `productos` SET `nombre` = ?, `precio` = ?,`imagen` = ?, `color`  = ? WHERE `productos`.`id` = ?;",$nombre,$precio,$imagen,$color,$_GET['id']);
redirect();
?>