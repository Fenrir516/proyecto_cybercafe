<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM producto WHERE Procesador_V='$id'";
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
                    
                                
                                <input type="text" class="form-control mb-3" name="Procesador_V" placeholder="Procesador_V" value="<?php echo $row['Procesador_V']  ?>">
                                <input type="text" class="form-control mb-3" name="Tarjetagrafica_V" placeholder="Tarjetagrafica_V" value="<?php echo $row['Tarjetagrafica_V']  ?>">
                                <input type="text" class="form-control mb-3" name="RAM_V" placeholder="RAM_V" value="<?php echo $row['RAM_V']  ?>">
                                <input type="text" class="form-control mb-3" name="Discoduro_V" placeholder="Disco duro_V" value="<?php echo $row['Discoduro_V']  ?>">
                                <input type="text" class="form-control mb-3" name="Tarjetamadre_V" placeholder="Tarjetamadre_V" value="<?php echo $row['Tarjetamadre_V']  ?>">
                                <input type="text" class="form-control mb-3" name="Gabinete_V" placeholder="Gabinete_V" value="<?php echo $row['Gabinete_V']  ?>">
                                <input type="text" class="form-control mb-3" name="Refigeracion_V" placeholder="Refigeracion_V" value="<?php echo $row['Refigeracion_V']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>