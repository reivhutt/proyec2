<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include ('db.php');

$marca=$_POST['txtMarca'];
$modelo=$_POST['txtModelo'];
$motor=$_POST['txtMotor'];
$chasis=$_POST['txtChasis'];
$color=$_POST['txtColor'];
$peso=$_POST['txtPeso'];
$precio=$_POST['txtPrecio'];

$consulta="INSERT INTO `automovil` (`Marca`, `Modelo`, `Motor`, `Chasis`, `Color`, `Peso`, `Precio`) 
VALUES ('$marca', '$modelo', '$motor', '$chasis', '$color', '$peso', '$precio');";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo "registro exitoso";


mysqli_close($conexion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>registro</title>
</head>
<body>
    <!---cabecera-->
    <div>
        <header class="enca"> <!---barra-->
            <div class="wrap"> <!---dentro del encabezado-->
                <div class="logos"> <!---titulo-->
                    Mildred ZHN
                </div>
                <nav> <!--botones-->
                    <a href="mostrar.php">Inicio</a>
                </nav>
            </div>
        </header>
        <br> <br><br><br><br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                <center><h1><?php echo "Registro Exitoso";  ?></h1><center>
</html>