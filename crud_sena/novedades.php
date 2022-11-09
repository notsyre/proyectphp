<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM novedades";
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
                    <h1>Ingresa las novedades</h1>
                        <form action="insertarNov.php" method="POST">
                       
                            <input type="text" class="form-control mb-3" name="id" placeholder="id">
                            <input type="text" class="form-control mb-3" name="titulo" placeholder="titulo">
                            <input type="text" class="form-control mb-3" name="novedad" placeholder="novedad">

                            <input type="submit" class="btn btn-success">
                            <a href="/tabla_crud/index.php" class="btn btn-primary">Regresar</a>
                        </form>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>               
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Novedades</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>                      
                                    <th><?php echo $row['id']?></th>
                                    <th><?php echo $row['titulo']?></th>
                                    <th><?php echo $row['novedad']?></th>
                                    <th><a href="actualizarNov.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Editar</a></th>
                                    <th><a href="deleteNov.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>               
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