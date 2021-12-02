<?php
include ("conexion.php");
$con=conectar();
$sql="SELECT * FROM registro";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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

            <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
            <input type="text" class="form-control mb-3" name="Apellido_P" placeholder="Apellido_P">
            <input type="text" class="form-control mb-3" name="Apellido_M" placeholder="Apellido_M">
            <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
            <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
            <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo">

            <input type="submit" class="btn btn-primary">
            <a href="/proyecto_Estrada_cybercafe/index.php">Inicio</a></li> 
            </form>
         </div>
         <div class="col-md-8">
        <h1>MOSTRAR TABLA</h1>
         <table class="table">
             <thead  class="table-success table-striped">
               <tr>
                 <th>ID</th>
                   <th>Nombre</th>
                   <th>Apellido_P</th>
                   <th>Apellido_M</th>
                   <th>Correo</th>
                   <th>Edad</th>
                   <th>Sexo</th>
               </tr>  
             </thead>

             <tbody>
                 <?php
                 while($row=mysqli_fetch_array($query)){
                     ?>
                   <tr>
                        <th><?php echo $row['id_reg']?></th>
                        <th><?php echo $row['Nombre']?></th>
                        <th><?php echo $row['Apellido_P']?></th>
                        <th><?php echo $row['Apellido_M']?></th>
                        <th><?php echo $row['correo']?></th>
                        <th><?php echo $row['edad']?></th>
                        <th><?php echo $row['sexo']?></th>
                        <th><a href="actualizar.php?Nombre=<?php echo $row['Nombre'] ?>" class="btn btn-info">Editar</a> </th>
                        <th><a href="delete.php?Nombre=<?php echo $row['Nombre'] ?>" class="btn btn-danger">Eliminar</a></th> 
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
