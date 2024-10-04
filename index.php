<?php
include ("CRUD/connection.php");
$con = connection();

// Consulta para obtener todos los alumnos
$sql = "SELECT * FROM alumnos";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
</head>
<body>
    <h1>Lista de Alumnos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($query)): ?>
            <tr>
                <td><?php echo $row['idAlumnos']; ?></td>
                <td><?php echo $row['nombreAlumnos']; ?></td>
                <td><?php echo $row['edad']; ?></td>
                <td>
                    <a href="CRUD/edit_alumno.php?id=<?php echo $row['idAlumnos']; ?>">Editar</a>
                    <a href="CRUD/delete_alumno.php?id=<?php echo $row['idAlumnos']; ?>" onclick="return confirm('¿Estás seguro de eliminar este alumno?')">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h2>Agregar nuevo alumno</h2>
    <form action="CRUD/insert_alumno.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre del alumno" required>
        <input type="number" name="edad" placeholder="Edad" required>
        <input type="submit" value="Agregar Alumno">
    </form>

</body>
</html>
