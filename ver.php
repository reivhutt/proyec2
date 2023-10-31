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
    
    <title>Ver</title>
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

        <!-----------------------mostrar-------------------------------->
        <div class="espacio-tabla">
            <table class="table table-dark table-striped">
                <thead>
                </thead>
                <tbody>
<br>
<br>
<br>

                <?php
                $id = $_GET["id"];
                $sql = "SELECT * FROM automovil where ID='$id'";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {

                ?>
                    <h3><p>Marca: <?php echo $mostrar['Marca'] ?></p></h3>
                    <h3><p>Modelo: <?php echo $mostrar['Modelo'] ?></p></h3>
                    <h3><p>Motor: <?php echo $mostrar['Motor'] ?></p></h3>
                    <h3><p>Chasis: <?php echo $mostrar['Chasis'] ?></p></h3>
                    <h3><p>Color: <?php echo $mostrar['Color'] ?></p></h3>
                    <h3><p>Peso: <?php echo $mostrar['Peso'] ?></p></h3>
                    <h3><p>Precio: <?php echo $mostrar['Precio'] ?></p></h3>

                <?php
                }
                ?>
        <a class="btn btn-primary" href="mostrar.php ?>">Regresar</a>
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