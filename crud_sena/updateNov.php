<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$titulo=$_POST['titulo'];
$novedad=$_POST['novedad'];

$sql="UPDATE novedades SET id='$id',titulo='$titulo',novedad='$novedad' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: novedades.php");
    }
?>