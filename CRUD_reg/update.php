<?php
include("conexion.php");
$con=conectar();
$Nombre=$_POST['Nombre'];
$Apellido_P=$_POST['Apellido_P'];
$Apellido_M=$_POST['Apellido_M'];
$correo=$_POST['correo'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$sql="UPDATE registro SET Nombre='$Nombre',Apellido_P='$Apellido_P',Apellido_M='$Apellido_M',correo='$correo',edad='$edad',sexo='$sexo' WHERE 1";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
}
?>