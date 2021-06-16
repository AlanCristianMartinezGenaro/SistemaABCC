<?php
require("../includes/constants.php");
require("../includes/functions.php");

$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$imagen=$_POST["imagen"];
$color=$_POST["color"];
$inserccion=query("INSERT INTO `productos` ( `id`, `nombre`, `precio`, `imagen`,`color`) VALUES (NULL,?,?,?,?)",$nombre,$precio,$imagen,$color);
redirect();
?>