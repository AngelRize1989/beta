<?php
    include("Conexion.php");
    $con=conectar();

    $sql="SELECT * FROM panaderia";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Panadria  "La dona de Pancha"</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="Pan.css">
        <link rel="icon" href="Pancito.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">

    </head>
    <body>
<BR>
<BR>
<BR>
<BR>
    <center><h1>PANADERIA "LA DOÑA PANCHA"</h1></center>
<br>
    <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h1>INGRESA LOS DATOS</h1>
                    <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ID" placeholder="ID">
                                    <input type="text" class="form-control mb-3" name="Nombre_del_producto" placeholder="Nombre_del_producto">
                                    <input type="text" class="form-control mb-3" name="Cantidad_Disponible" placeholder="Cantidad_Disponible">
                                    <input type="text" class="form-control mb-3" name="Precio_del_producto" placeholder="Precio_del_producto">
                                    <input type="text" class="form-control mb-3" name="Numero_de_expedio" placeholder="Numero_de_expedio">
                                    <input type="text" class="form-control mb-3" name="Ganancias_totales" placeholder="Ganancias_totales">
                                    
                                    <input type="submit" class="btn btn-primary">
                     </form>

                </div>
                <div class="col-md-8">
                <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre del producto</th>
                                        <th>Cantidad Disponible</th>
                                        <th>Precio del producto</th>
                                        <th>Numero de expedio</th>
                                        <th>Ganancias Totales</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID']?></th>
                                                <th><?php  echo $row['Nombre_del_producto']?></th>
                                                <th><?php  echo $row['Cantidad_Disponible']?></th>
                                                <th><?php  echo $row['Precio_del_producto']?></th>
                                                <th><?php  echo $row['Numero_de_expedio']?></th>
                                                <th><?php  echo $row['Ganancias_totales']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['ID'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                </div>
            </div>
        </div>



    </body>
</html>