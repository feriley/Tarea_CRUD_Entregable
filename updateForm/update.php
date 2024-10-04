<?php 
    include("../CRUD/connection.php");
    $con = connection();

    $idAlumnos = $_GET['id'];

    // Consulta para obtener los datos del alumno por id
    $sql = "SELECT * FROM alumnos WHERE idAlumnos='$idAlumnos'";
    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Actualización de alumnos">
    <meta name="keywords" content="html, css, bootstrap, alumnos, php, CRUD">
    <meta name="author" content="tu.correo@ejemplo.com">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>

    <!-- Titulo -->
    <title>Editar Alumno</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Actualizar Alumno</h1>

        <!-- Formulario de actualización de alumno -->
        <form action="../CRUD/edit_alumno.php" method="POST">
            <!-- Campo oculto para el id del alumno -->
            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?= $row['idAlumnos'] ?>">
            </div>

            <!-- Nombre del alumno -->
            <div class="form-group">
                <label for="nombre">Nombre del Alumno</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?= $row['nombreAlumnos'] ?>" required>
            </div>

            <!-- Edad del alumno -->
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" value="<?= $row['edad'] ?>" required>
            </div>

            <!-- Botón para actualizar los datos -->
            <input type="submit" class="m-3 btn btn-primary" value="Actualizar Alumno">
        </form>
    </div>
</body>

</html>
