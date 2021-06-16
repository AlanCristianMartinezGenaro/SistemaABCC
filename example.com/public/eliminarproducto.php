<?php
require("../includes/constants.php");
require("../includes/functions.php");

//$query="DELETE FROM usuarios WHERE id='$pan'";
$eliminar=query("DELETE FROM `productos` WHERE `productos`.`id` = ?", $_GET['nombre']);
redirect();

?>