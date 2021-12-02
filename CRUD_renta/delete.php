<?php
include ("conexion.php");
$con=conectar();

$Tipo_pc=$_GET['Tipo_pc'];

$sql="DELETE FROM renta WHERE Tipo_pc='$Tipo_pc'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
}
?>