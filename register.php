<?php
session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lbd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die($conn->connect_error);
}

$autenticado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];
    $fecha_de_ingreso = $_POST["fecha_de_ingreso"];

    $sql = "INSERT INTO socios (nombre, apellido, fecha_nacimiento, fecha_ingreso, club) VALUES ('$nombre', '$apellido', '$fecha_de_nacimiento', '$fecha_de_ingreso', '123')";

    if ($conn->query($sql) === TRUE) {
        $autenticado = true;
        $_SESSION["autenticado"] = true;
        header("Location: index.php");
    } else {
        echo $conn->error;
    }
}

$conn->close();
?>