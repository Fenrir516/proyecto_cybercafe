<?php
include ("conexion.php");
$con=conectar();
$sql="SELECT * FROM renta";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renta</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
     <div class="container">
         <div class="row">
       
          
         <div class="col-md-3">
         <h1>INGRESA LOS DATOS</h1>
         <form action="insertar.php" method="POST">

            <input type="text" class="form-control mb-3" name="Tipo_pc" placeholder="Tipo_pc">
            <input type="text" class="form-control mb-3" name="horas" placeholder="Horas Rentadas">
            <input type="text" class="form-control mb-3" name="num_pc" placeholder="Numero de PC">
            <input type="text" class="form-control mb-3" name="horas_extras" placeholder="Horas extras">
            <input type="text" class="form-control mb-3" name="tecl_mec" placeholder="Teclado Mecanico">
            <input type="text" class="form-control mb-3" name="aud" placeholder="Audifonos">
            <input type="text" class="form-control mb-3" name="hora" placeholder="Hora de salida">

            <input type="submit" class="btn btn-primary">
            <a href="/proyecto_Estrada_cybercafe/index.php">Inicio</a></li> 

            </form>
         </div>
         <div class="col-md-8">
        <h1>MOSTRAR TABLA</h1>
         <table class="table">
             <thead  class="table-success table-striped">
               <tr>
                   <th>Tipo de PC</th>
                   <th>Horas rentadas</th>
                   <th>Numero de PC</th>
                   <th>Horas Extras</th>
                   <th>Teclado Mecanico</th>
                   <th>Audifonos</th>
                   <th>Hora de Salida</th>
               </tr>  
             </thead>

             <tbody>
                 <?php
                 while($row=mysqli_fetch_array($query)){
                     ?>
                   <tr>
                        <th><?php echo $row['Tipo_pc']?></th>
                        <th><?php echo $row['horas']?></th>
                        <th><?php echo $row['num_pc']?></th>
                        <th><?php echo $row['horas_extras']?></th>
                        <th><?php echo $row['tecl_mec']?></th>
                        <th><?php echo $row['aud']?></th>
                        <th><?php echo $row['hora']?></th>
                        <th><a href="actualizar.php?Tipo_pc=<?php echo $row['Tipo_pc'] ?>" class="btn btn-info">Editar</a> </th>
                        <th><a href="delete.php?Tipo_pc=<?php echo $row['Tipo_pc'] ?>" class="btn btn-danger">Eliminar</a></th> 
                    </tr>
                 <?php 
                 }
                 ?>
             </tbody>
         </table>
           </div>
         </div>
     </div>
</body>
</html>
