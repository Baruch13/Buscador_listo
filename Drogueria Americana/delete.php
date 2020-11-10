<?php
require("config.php");

if(isset($_GET['id_usuario'])){
	$id_usuario = $_GET['id_usuario'];

	$query = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";
	$result = mysqli_query($conexion, $query);

	if (!$result) {
		die("Ocurrio Un Error");
	}
		
		header("location: index.php");
}

?>