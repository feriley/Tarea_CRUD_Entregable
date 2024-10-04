<?php

include("../CRUD/connection.php");
$con = connection();

$idAlumnos = $_GET["id"];

$sql = "DELETE FROM alumnos WHERE idAlumnos='$idAlumnos'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{
    echo "Error al eliminar el alumno.";
}

?>
