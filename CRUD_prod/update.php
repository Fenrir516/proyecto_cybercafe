<?php
include("conexion.php");
$con=conectar();
$Procesador_V=$_POST['Procesador_V'];
$Tarjetagrafica_V=$_POST['Tarjetagrafica_V'];
$RAM_V=$_POST['RAM_V'];
$Discoduro_V=$_POST['Discoduro_V'];
$Tarjetamadre_V=$_POST['Tarjetamadre_V'];
$Gabinete_V=$_POST['Gabinete_V'];
$Refigeracion_V=$_POST['Refigeracion_V'];
$sql="UPDATE producto SET Procesador_V='$Procesador_V',Tarjetagrafica_V='$Tarjetagrafica_V',RAM_V='$RAM_V',Discoduro_V='$Discoduro',Tarjetamadre_V='$Tarjetamadre_V', 'Gabinete_V='$Gabinete_V', 'Refigeracion_V='$Refigeracion_V'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
}
?>