<?php
session_start(); 

if (isset($_SESSION["autenticado"]) && $_SESSION["autenticado"]) {
    unset($_SESSION["autenticado"]);


}

header("Location: index.php");
?>