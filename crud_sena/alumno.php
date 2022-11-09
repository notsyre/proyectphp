<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM alumno";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <title>Pagina alumno</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3">
                    <h1>Ingrese sus datos</h1>
                        <form action="insertar.php" method="POST">

                            <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="Codigo del estudiante">
                            <input type="text" class="form-control mb-3" name="id" placeholder="ID">
                            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                            <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos">

                            <input type="submit" class="btn btn-success">
                            <a href="/tabla_crud/index.php" class="btn btn-primary">Regresar</a>
                        </form>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Codigo</th>
                                <th>Id</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['cod_estudiante']?></th>
                                    <th><?php echo $row['id']?></th>
                                    <th><?php echo $row['nombre']?></th>
                                    <th><?php echo $row['apellido']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-success">Editar</a></th>
                                    <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>               
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