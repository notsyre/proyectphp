<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$sql="UPDATE alumno SET id='$id',nombre='$nombre',apellido='$apellido' WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>