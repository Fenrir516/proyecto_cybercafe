<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM renta WHERE Tipo_pc='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                
                                <input type="text" class="form-control mb-3" name="Tipo_pc" placeholder="Tipo de PC" value="<?php echo $row['Tipo_pc']  ?>">
                                <input type="text" class="form-control mb-3" name="horas" placeholder="Horas rentadas" value="<?php echo $row['horas']  ?>">
                                <input type="text" class="form-control mb-3" name="num_pc" placeholder="Numero de PC" value="<?php echo $row['num_pc']  ?>">
                                <input type="text" class="form-control mb-3" name="horas_extras" placeholder="Horas extras" value="<?php echo $row['horas_extras']  ?>">
                                <input type="text" class="form-control mb-3" name="tecl_mec" placeholder="Teclado Mecanico" value="<?php echo $row['tecl_mec']  ?>">
                                <input type="text" class="form-control mb-3" name="aud" placeholder="Audifonos" value="<?php echo $row['aud']  ?>">
                                <input type="text" class="form-control mb-3" name="hora" placeholder="Hora de salida" value="<?php echo $row['hora']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>