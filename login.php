<!DOCTYPE html>

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

    $sql = "SELECT * FROM socios WHERE nombre='$nombre' AND apellido='$apellido'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "";
        header("Location: index.php");
        $autenticado = true;
        $_SESSION["autenticado"] = true;
    } else {
        echo "";
        header("Location: index.php");
    }
}

$conn->close();
?>