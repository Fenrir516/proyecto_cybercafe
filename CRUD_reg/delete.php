<?php
include ("conexion.php");
$con=conectar();

$Nombre=$_GET['Nombre'];

$sql="DELETE FROM registro WHERE Nombre='$Nombre'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
}
?>