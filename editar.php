<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    
    <title>Editar</title>
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
                    <a href="mostrar.php">Tabla</a>
                    <a href="index.html">Registrar</a>
                </nav>
            </div>
        </header>
        <!-- -----------------------mostrar-------------------------------- -->
        <div class="espacio-tabla">
            <table class="table table-dark table-striped">
                <thead>
        
                </thead>
            <tbody>

<?php
    $id = $_GET["id"];
    $sql="SELECT * FROM automovil where ID='$id'";
    $result = mysqli_query($conexion,$sql);
    while($mostrar = mysqli_fetch_array($result)){

?>

 <form action="procesar_editar.php" method="POST">
        <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="txtID">
    <p>Marca</p>
    <form action="procesar_editar.php" method="POST">
        <input type="text" value="<?php echo $mostrar['Marca'] ?>" name="txtMarca">
    <p>Modelo</p>
    <form action="procesar_editar.php" method="POST">
        <input type="text" value="<?php echo $mostrar['Modelo'] ?>" name="txtModelo">
    <p>Motor</p>
    <form action="procesar_editar.php" method="POST">
        <input type="text" value="<?php echo $mostrar['Motor'] ?>" name="txtMotor">
    <p>Chasis</p>    
    <form action="procesar_editar.php" method="POST">
        <input type="text" value="<?php echo $mostrar['Chasis'] ?>" name="txtChasis">
    <p>Color</p>
    <form action="procesar_editar.php" method="POST">
        <input type="text" value="<?php echo $mostrar['Color'] ?>" name="txtColor">
    <p>Peso</p>
    <form action="procesar_editar.php" method="POST">
        <input type="text" value="<?php echo $mostrar['Peso'] ?>" name="txtPeso">
    <p>Precio</p> 
        <form action="procesar_editar.php" method="POST">
        <input type="text" value="<?php echo $mostrar['Precio'] ?>" name="txtPrecio">
<?php
    }
?>
<br>
<br>
<input type="submit" value="ACTUALIZAR">
</form>
    </tbody>
</table>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>