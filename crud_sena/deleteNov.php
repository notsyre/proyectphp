<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM novedades  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: novedades.php");
    }
?>