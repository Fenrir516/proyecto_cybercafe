<?php
include("conexion.php");
$con=conectar();
$Tipo_pc=$_POST['Tipo_pc'];
$horas=$_POST['horas'];
$num_pc=$_POST['num_pc'];
$horas_extras=$_POST['horas_extras'];
$tecl_mec=$_POST['tecl_mec'];
$aud=$_POST['aud'];
$hora=$_POST['hora'];
$sql="UPDATE renta SET Tipo_pc='$Tipo_pc',horas='$horas',num_pc='$num_pc',horas_extras='$horas_extras',tecl_mec='$tecl_mec',aud='$aud',hora='$hora' WHERE 1";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
}
?>