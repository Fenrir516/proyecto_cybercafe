<?php
include("conexion.php");
$con=conectar();

$Tipo_pc=$_POST['Tipo_pc'];
$horas = $_POST['horas']; 
$num_pc = $_POST['num_pc'];
$horas_extras= $_POST['horas_extras'];
$tecl_mec=  $_POST['tecl_mec'];
$aud= $_POST['aud'];
$hora= $_POST['hora'];
	    
$sql="INSERT INTO renta VALUES ('$Tipo_pc','$horas','$num_pc','$horas_extras','$tecl_mec','$aud','$hora')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
}else{

}
?>