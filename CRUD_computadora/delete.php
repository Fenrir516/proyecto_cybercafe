<?php
include ("conexion.php");
$con=conectar();

$Procesador=$_GET['Procesador'];

$sql="DELETE FROM computadora WHERE Procesador='$Procesador'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
}
?>