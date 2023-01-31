<?php

include("Conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$Nombre_del_producto=$_POST['Nombre_del_producto'];
$Cantidad_Disponible=$_POST['Cantidad_Disponible'];
$Precion_del_producto=$_POST['Precio_del_producto'];
$Numero_de_expedio=$_POST['Numero_de_expedio'];
$Ganancias_totales=$_POST['Ganancias_totales'];

$sql="INSERT INTO panaderia VALUES ('$ID','$Nombre_del_producto','$Cantidad_Disponible','$Precion_del_producto','$Numero_de_expedio','$Ganancias_totales')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: horno.php");

}else{

}

?>