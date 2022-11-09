<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$titulo=$_POST['titulo'];
$novedad=$_POST['novedad'];


$sql="INSERT INTO novedades VALUES('$id','$titulo','$novedad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: /tabla_crud/novedades.php");
    
}else {
}
?>