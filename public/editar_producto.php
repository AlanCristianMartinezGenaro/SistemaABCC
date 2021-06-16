<?php
require("../includes/constants.php");
require("../includes/functions.php");
$y=query("SELECT * FROM productos WHERE id=?",$_GET['nombre'])[0];
require("../templates/header.php");
require("../templates/form_editar.php");
?>