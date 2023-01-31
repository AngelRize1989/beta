<?php

    include("Conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM panaderia WHERE ID='$id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
    
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link type="text/css" rel="stylesheet" href="Pan.css">
    <link rel="icon" href="Pancito.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
 </head>
 <body>

    <br>
    <br>
    <br>
    <br>
    <center><h1>Panaderia  "La dona de Pancha"</h1></center>
    <br>
    <br>
    <center><h3>COLOCA LOS NUEVOS VALORES</h3></center>

 <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="ID" value="<?php echo $row['ID']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombre_del_producto" placeholder="Nombre_del_producto" value="<?php echo $row['Nombre_del_producto']  ?>">
                                <input type="text" class="form-control mb-3" name="Cantidad_Disponible" placeholder="Cantidad_Disponible" value="<?php echo $row['Cantidad_Disponible']  ?>">
                                <input type="text" class="form-control mb-3" name="Precio_del_producto" placeholder="Precio_del_producto" value="<?php echo $row['Precio_del_producto']  ?>">
                                <input type="text" class="form-control mb-3" name="Numero_de_expendio"  placeholder="Numero_de_expedio"<?php echo $row['Numero_de_expedio'] ?>">
                                <input type="text" class="form-control mb-3" name="Ganancias_totales"  placeholder="Ganancias_totales"<?php echo $row['Numero_de_expedio'] ?>">  
                                <br>
                            <center><input type="submit" class="btn btn-primary btn-block" value="Actualizar"></center>
                    </form>
                    
                </div>

    
 </body>
 </html>