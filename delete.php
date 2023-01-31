<?php

include("Conexion.php");
$con=conectar();

$ID=$_GET['id'];

$sql="DELETE FROM panaderia WHERE ID='$ID'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: horno.php");
}


?>