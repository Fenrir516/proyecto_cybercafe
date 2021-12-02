<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellido_P = $_POST['Apellido_P']; 
$Apellido_M = $_POST['Apellido_M'];
$correo= $_POST['correo'];
$edad=  $_POST['edad'];
$sexo= $_POST['sexo'];
$id_reg= $_POST['id_reg'];
	    
$sql="INSERT INTO registro VALUES ('$Nombre','$Apellido_P','$Apellido_M','$correo','$edad','$sexo','$id_reg')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
}else{

}
?>