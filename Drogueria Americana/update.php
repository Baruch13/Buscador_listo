<?php

require("config.php");

if(isset($_GET['id_usuario'])){
	$id_usuario = $_GET['id_usuario'];

	$query = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
	$result = mysqli_query($conexion, $query);
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_array($result);
		$nombre = $row['nombre'];
		$apellidos = $row['apellidos'];
		$cc = $row['cc'];
		$compra = $row['compra'];
		$valor = $row['valor'];
		$direccion = $row['direccion'];
		$fecha = $row['fecha'];
		$telefono = $row['telefono'];
		$pago = $row['pago'];

	}

	}
if (isset($_POST['update'])) {
  $id_usuario = $_GET['id_usuario'];
  $nombre= $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $cc = $_POST['cc'];
  $valor = $_POST['valor'];
  $direccion = $_POST['direccion'];
  $fecha = $_POST['fecha'];
  $telefono = $_POST['telefono'];
  $pago = $_POST['pago'];







  $query = "UPDATE usuarios set nombre = '$nombre', apellidos = '$apellidos', cc = '$cc', valor = '$valor',direccion = '$direccion', fecha = '$fecha', telefono = '$telefono', pago = '$pago' WHERE id_usuario=$id_usuario";
  mysqli_query($conexion, $query);

  header('Location: index.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="CSS/update.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title>Actualizar</title>
</head>
<body>
	<center>
		<div id="contenedor">
			<form action="update.php?id_usuario=<?php echo $_GET['id_usuario']; ?>" method="POST"><br><br><br>
				<input class="form-control" type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
				<input class="form-control" type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>">
				<input class="form-control" type="text" name="cc" value="<?php echo $row['cc']; ?>">
				<input class="form-control" type="text" name="valor" value="<?php echo $row['valor']; ?>">
				<input class="form-control" type="text" name="direccion" value="<?php echo $row['direccion']; ?>">
				<input class="form-control" type="text" name="telefono" value="<?php echo $row['telefono']; ?>">
				<input class="form-control" type="text" name="pago" value="<?php echo $row['pago']; ?>"><br><br>
				<button class="btn btn-primary" name="update">Guardar</button>
			</form>
		</div>
	</center>
</body>
</html>