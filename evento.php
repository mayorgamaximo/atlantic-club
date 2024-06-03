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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["evento_nombre"];
    $desc = $_POST["evento_descripcion"];
    $fech = $_POST["evento_fecha"];

    $sql = "INSERT INTO eventos (fecha, nombre, club, descripcion) VALUES ('$fech', '$nombre', '123', '$desc')";

    if ($conn->query($sql) === TRUE) {
        header("Location: eventos.php");
    } else {
        echo $conn->error;
    }
}

$conn->close();
?>