<?php
include ("conexion.php");
$con=conectar();

$Procesador_V=$_GET['Procesador_V'];

$sql="DELETE FROM producto WHERE Procesador_V='$Procesador_V'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
}
?>