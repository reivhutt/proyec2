<?php
include('db.php');

$ID=$_POST['txtID'];
$MARCA=$_POST['txtMarca'];
$MODELO=$_POST['txtModelo'];
$MOTOR=$_POST['txtMotor'];
$CHASIS=$_POST['txtChasis'];
$COLOR=$_POST['txtColor'];
$PESO=$_POST['txtPeso'];
$PRECIO=$_POST['txtPrecio'];

mysqli_query($conexion,"UPDATE `automovil` SET `Marca` = '$MARCA', `Modelo` = '$MODELO', `Motor` = '$MOTOR', 
`Chasis` = '$CHASIS', `Color` = '$COLOR', `Peso` = '$PESO', `Precio` = '$PRECIO' WHERE `ID` = '$ID'")or die("error de actualizar");
 
mysqli_close($conexion);
header("Location:mostrar.php");


?>