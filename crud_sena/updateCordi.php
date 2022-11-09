<?php

include("conexion.php");
$con=conectar();

$cod_cordinador=$_POST['cod_cordinador'];
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$sql="UPDATE cordinador SET id='$id',nombre='$nombre',apellido='$apellido' WHERE cod_cordinador='$cod_cordinador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cordinador.php");
    }
?>