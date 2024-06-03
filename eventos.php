<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eventos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Mazi fc</title>
</head>

<body class="body">
    <header>
        <nav class="navegador">
            <img class="logo" src="logo.png">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="socios-register.html">registro para socios</a></li>
            </ul>
          </nav>

    </header> 

    <main>
        <h1>Eventos</h1>
        <form action="evento.php" method="POST">
            <h4>nombre del evento</h4>
            <input type="text" name="evento_nombre">
            <h4>descripcion del evento</h4>
            <input type="text" name="evento_descripcion">
            <h4>fecha del evento</h4>
            <input type="date" name="evento_fecha">
            <br>
            <input type="submit" class="enviar">
        </form>
      
    </main>
    

    <?php
    session_start(); 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lbd";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    $eventos = "SELECT fecha, nombre, descripcion FROM eventos";
    $event = mysqli_query($conn, $eventos);

    while($evento = mysqli_fetch_array($event)){

        echo "<center><div class=\"eventos\"><p> <b>$evento[1]</b><br>$evento[0]<br>$evento[2]<br></p></div><center>";

    }
        if(mysqli_query($conn, $eventos)){
            $success = "";
        }else{
            echo "". mysqli_error($conn);
        }
        ?>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>