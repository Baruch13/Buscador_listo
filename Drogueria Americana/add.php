<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/add.css">
    <title></title>
</head>
<body>
<form method="POST" action="">
    <center>
    <input type="text" hidden name="send" value="send" >
    <input type="text" name="nombre" placeholder="Nombre..."><br><br>
    <input type="text" name="apellidos" placeholder="Apellido"><br><br>
    <input type="number" name="cc" placeholder="Cedula..."><br><br>
    <input type="text" name="compra" placeholder="Compra"><br><br>
    <input type="number" name="valor" placeholder="Valor"><br><br>
    <input type="text" name="direccion" placeholder="direccion.."><br><br>
    <input type="date" name="fecha" placeholder=""><br><br>
    <input type="number" name="telefono" placeholder="Telefono"><br><br>
    <input type="text" name="pago" placeholder="Pago O No Pago"><br><br><br><br>


    <input type="SUBMIT" name="reg"><br><br><br><br>
</center>
</form>

<?php 
if(isset($_POST['send'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cc'];
    $compra = $_POST['compra'];
    $valor = $_POST['valor'];
    $direccion = $_POST['direccion'];
    $fecha = $_POST['fecha'];
    $telefono = $_POST['telefono'];
    $pago = $_POST['pago'];

    include('config.php');
    $query =  "INSERT INTO usuarios(nombre, apellidos, cc, compra, valor, direccion, fecha, telefono, pago) VALUES('$nombre', '$apellidos', '$cedula', '$compra', '$valor', '$direccion', '$fecha',  '$telefono', '$pago') ";
    try{
        $data = $conexion->query($query);
        if($data){
            header("Location:index.php");
        }else{
            ?>
            <script>
                alert("ha ocurrido un error al guardar los datos");
            </script>
            <?php
        }
    }catch(Exception $e){
        echo $e->getMessage().mysqli_errno($conexion);
    }
}

 ?>
</body>
</html>