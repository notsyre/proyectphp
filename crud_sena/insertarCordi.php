<?php
include("conexion.php");
$con=conectar();

$cod_cordinador=$_POST['cod_cordinador'];
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];


$sql="INSERT INTO cordinador VALUES('$cod_cordinador','$id','$nombre','$apellido')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cordinador.php");
    
}else {
}
?>