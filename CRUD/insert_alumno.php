<?php

include("../CRUD/connection.php");
$con = connection();

$nombreAlumnos = $_POST['nombre'];
$edad = $_POST['edad'];

$sql = "INSERT INTO alumnos (nombreAlumnos, edad) VALUES('$nombreAlumnos', '$edad')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{
    echo "Error al insertar el alumno.";
}

?>
