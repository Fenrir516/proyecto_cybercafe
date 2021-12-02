<?php
include ("conexion.php");
$con=conectar();
$sql="SELECT * FROM producto";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Producto</title>
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

            <input type="text" class="form-control mb-3" name="Procesador_V" placeholder="Procesador">
            <input type="text" class="form-control mb-3" name="Tarjetagrafica_V" placeholder="Tarjetagrafica">
            <input type="text" class="form-control mb-3" name="RAM_V" placeholder="RAM">
            <input type="text" class="form-control mb-3" name="Discoduro_V" placeholder="Discoduro">
            <input type="text" class="form-control mb-3" name="Tarjetamadre_V" placeholder="Tarjetamadre">
            <input type="text" class="form-control mb-3" name="Gabinete_V" placeholder="Gabinete">
            <input type="text" class="form-control mb-3" name="Refigeracion_V" placeholder="Refigeracion">

            <input type="submit" class="btn btn-primary">
            <a href="/proyecto_Estrada_cybercafe/index.php">Inicio</a></li> 

            </form>
         </div>
         <div class="col-md-8">
        <h1>MOSTRAR TABLA</h1>
         <table class="table">
             <thead  class="table-success table-striped">
               <tr>
                   <th>Procesador en venta</th>
                   <th>Tarjeta Grafica en venta</th>
                   <th>RAM en venta</th>
                   <th>Disco Duro en venta</th>
                   <th>Tarjeta Madre en venta</th>
                   <th>Gabineteen venta</th>
                   <th>Refigeracionen venta</th>
               </tr>  
             </thead>

             <tbody>
                 <?php
                 while($row=mysqli_fetch_array($query)){
                     ?>
                   <tr>
                        <th><?php echo $row['Procesador_V']?></th>
                        <th><?php echo $row['Tarjetagrafica_V']?></th>
                        <th><?php echo $row['RAM_V']?></th>
                        <th><?php echo $row['Discoduro_V']?></th>
                        <th><?php echo $row['Tarjetamadre_V']?></th>
                        <th><?php echo $row['Gabinete_V']?></th>
                        <th><?php echo $row['Refigeracion_V']?></th>
                        <th><a href="actualizar.php?Procesador_V=<?php echo $row['Procesador_V'] ?>" class="btn btn-info">Editar</a> </th>
                        <th><a href="delete.php?Procesador_V=<?php echo $row['Procesador_V'] ?>" class="btn btn-danger">Eliminar</a></th> 
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
