<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM computadora WHERE Procesador='$id'";
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
                    
                                
                                <input type="text" class="form-control mb-3" name="Procesador" placeholder="Procesador" value="<?php echo $row['Procesador']  ?>">
                                <input type="text" class="form-control mb-3" name="Tarjetagrafica" placeholder="Tarjetagrafica" value="<?php echo $row['Tarjetagrafica']  ?>">
                                <input type="text" class="form-control mb-3" name="RAM" placeholder="RAM" value="<?php echo $row['RAM']  ?>">
                                <input type="text" class="form-control mb-3" name="Discoduro" placeholder="Disco duro" value="<?php echo $row['Discoduro']  ?>">
                                <input type="text" class="form-control mb-3" name="Monitor" placeholder="Monitor" value="<?php echo $row['Monitor']  ?>">
                                <input type="text" class="form-control mb-3" name="Gabinete" placeholder="Gabinete" value="<?php echo $row['Gabinete']  ?>">
                                <input type="text" class="form-control mb-3" name="Refigeracion" placeholder="Refigeracion" value="<?php echo $row['Refigeracion']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>