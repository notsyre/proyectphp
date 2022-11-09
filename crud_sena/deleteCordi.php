<?php

include("conexion.php");
$con=conectar();

$cod_cordinador=$_GET['id'];

$sql="DELETE FROM cordinador  WHERE cod_cordinador='$cod_cordinador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cordinador.php");
    }
?>