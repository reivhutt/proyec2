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
    
    <title>Mostrar</title>
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
            <!--titulo-->
            <br>
            <br>
            <div class="logos"> 
                Lista de Automóviles
            </div>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Motor</th>
                        <th scope="col">Chasis</th>
                        <th scope="col">Color</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                $sql = "SELECT * FROM automovil";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {

                ?>

                    <tr>
                        <td><?php echo $mostrar['ID'] ?></td>
                        <td><?php echo $mostrar['Marca'] ?></td>
                        <td><?php echo $mostrar['Modelo'] ?></td>
                        <td><?php echo $mostrar['Motor'] ?></td>
                        <td><?php echo $mostrar['Chasis'] ?></td>
                        <td><?php echo $mostrar['Color'] ?></td>
                        <td><?php echo $mostrar['Peso'] ?></td>
                        <td><?php echo $mostrar['Precio'] ?></td>

                        <td>
                            <!--ver-->
                            <a class="btn btn-primary" href="ver.php?id=<?php echo $mostrar['ID'] ?>">Ver</a>
                            <!--editar-->
                            <a class="btn btn-success" href="editar.php?id=<?php echo $mostrar['ID'] ?>">Editar</a>
                            <!--eliminar-->
                            <form action="eliminar.php" method="post" style="display: inline;">
                                <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="txtID" readonly>
                                <input class="btn btn-danger" type="submit" value="Eliminar" name="btnEliminar">
                            </form>
                        </td>

                    </tr>

                <?php
                }
                ?>
                </tbody>

            </table>

            <div class="reportes">
                <center><a class="btn btn-warning" href="reportes.php">Imprimir Lista</a></center>
            </div>
        </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>