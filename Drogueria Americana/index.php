
<html>

<head>
	

	<title>Drogueria Americana</title>
	<link rel="stylesheet" href="CSS/index.css">
</head>

<body>
	<div id="form">
		<form method="POST" action="index.php">
			<br><br>
			<center><input placeholder="Busca..." name="search" id="put" type="text">
				<button id="btn">Buscar</button>
		</form>
				<a   id="btn2" href="add.php">Registrar</a><br><br>


		<div id="informacion">
			<center>
				<table class="egt">

					<tr>
						<th> Nombre </th>
						<th> Apellido </th>
						<th> Cedula </th>
						<th> Compra </th>
						<th> Valor </th>
						<th> Direccion </th>
						<th> Telefono </th>
						<th> Fecha </th>
						<th> Estado </th>
						<th> Actualizar </th>
						<th> Eliminar </th>






					</tr>
					<?php
					include("config.php");

					if (isset($_POST['search'])) {
						$search = $_POST['search'];

						$ver = $conexion->query("SELECT * FROM usuarios WHERE nombre  LIKE '%$search%' OR apellidos LIKE '%$search%' OR compra LIKE '%$search%' OR cc LIKE '%$search%' " );

						if ($ver) {


							while ($row = $ver->fetch_array()) {
								$nombre = $row[1];
								$apellido = $row[2];
								$cc = $row[3];
								$compra = $row[4];
								$valor = $row[5];
								$direccion = $row[6];
								$telefono = $row[8];
								$fecha = $row[7];
								$pago = $row[9];





								
					?>
								<tr>
									<!-- NOMBRE-->
									

									<td><?php echo $nombre; ?></td>
									<td><?php echo $apellido; ?></td>
									<td><?php echo $cc; ?></td>
									<td><?php echo $compra; ?></td>
									<td><?php echo $valor; ?></td>
									<td><?php echo $direccion; ?></td>
									<td><?php echo $telefono; ?></td>
									<td><?php echo $fecha; ?></td>
									<td><?php echo $pago; ?></td>
									<td><a href="update.php?id_usuario=<?php  echo $row['id_usuario']  ?>">Editar</a></td>
									<td><a href="delete.php?id_usuario=<?php  echo $row['id_usuario']  ?>">Eliminar</a></td>

								</tr>
					<?php

							}

						}
					}


					?>



				</table>
			</center>
		</div>
	</div>
</body>

</html>