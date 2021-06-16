<?php
	require("../includes/constants.php");
	require("../includes/functions.php");


if(isset($_GET['q'])){
	$productos = query("SELECT * FROM productos WHERE nombre LIKE ?", '%'.$_GET['q'].'%');
}else{
	$productos = query("SELECT * FROM productos");
}

require("../templates/Header.php");
require("../templates/index.php");
?>