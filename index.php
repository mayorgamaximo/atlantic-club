<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Mazi fc</title>
</head>

<body class="body">
    <main>
        <nav class="navegador">
            <img class="logo" src="logo.png">
            <ul>
                <li><a href="eventos.php">Eventos</a></li>
                <?php
                session_start();

                $autenticado = false; 
                if (isset($_SESSION["autenticado"]) && $_SESSION["autenticado"]) {
                  echo '<li><a href="logout.php">Cerrar Sesión</a></li>';
              } else {
                  echo '<li><a href="socios-register.html">Registro para Socios</a></li>';
              }
                ?>
            </ul>
          </nav>

          <div class="container">
             <div class="box" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/2/24/WRJCH_2018-08-11_JM2x_Semi_CD_%28Martin_Rulsch%29_68.jpg');">
              <a href="#remo"><h2>remo</h2> </a>
            </div>
          </a>

            <div class="box" style="background-image: url('https://feduargentina.com.ar/wp-content/uploads/2017/07/waterpoolo-750x400.jpg');">
              <a href="#waterpolo"><h2>Waterpolo</h2></a> 
            </div>
            <div class="box" style="background-image: url('https://cflvdg.avoz.es/sc/480x/default/2022/03/09/00121646840451211852136/Foto/natacion.jpg');">
              <a href="#natacion"><h2>Natación</h2></a>
            </div>
            <div class="box" style="background-image: url('https://www.scoresportmagazine.com/wp-content/uploads/2019/12/Portadilla-articulo-web-rugby-Sub-emaze-730x460.jpg');">
              <a href="#rugby-subacuatico"><h2>Rugby</h2></a> 
            </div>
            <div class="box" style="background-image: url('https://www.escolacatalanadesurf.com/assets/arxius/3bb71beea047a4050d99f557464bb691.jpg');">
              <a href="#surf"><h2>Surf</h2></a> 
            </div>
          </div>

          
          <div class="centrar">
          <div class="img-info-deportes">
            <img src="data:image/jpeg;base64,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" class="foto-info-deportes" alt="">
            <div class="info-deportes" id="remo">
              <h1>Remo</h1>
              <h3>El remo consiste en propulsar una embarcación utilizando remos fijados a la misma. Se diferencia de otras disciplinas en que los remeros se sientan de espaldas a la dirección del movimiento, por lo que cruzan la línea de meta de espaldas.</h3>
              <a href="equipo-remo.html" class="btn btn-primary">ver equipo</a>
            </div>
            
          </div>
        </div>

        <div class="centrar">
          <div class="img-info-deportes">
            <img src="https://aprenderfacil.com.ar/wp-content/uploads/2022/06/waterpolo.jpg" class="foto-info-deportes" alt="">
            <div class="info-deportes" id="waterpolo">
              <h1>waterpolo</h1>
              <h3>El waterpolo es un deporte acuático de equipo, sujeto a unas normas e institucionalizado, que se practica en una superficie limitada de piscina entre dos conjuntos de 7 jugadores de campo (6 jugadores y portero) y con la finalidad de introducir el balón en la portería contraria</h3>
              <a href="equipo-de-waterpolo.html" class="btn btn-primary">ver equipo</a>
            </div>
          </div>
        </div>

        <div class="centrar">
          <div class="img-info-deportes">
            <img src="https://concepto.de/wp-content/uploads/2019/06/natacion-e1562943144215.jpg" class="foto-info-deportes" alt="">
            <div class="info-deportes" id="natacion">
              <h1>Natacion</h1>
              <h3>La natación es el arte de sostenerse y avanzar, usando los brazos y las piernas, sobre o bajo el agua. Puede realizarse como actividad lúdica o como deporte de competición. Debido a que los seres humanos no nadan instintivamente, la natación es una habilidad que debe ser aprendida.</h3>
              <a href="natacion.html" class="btn btn-primary">ver equipo</a>
            </div>
          </div>
        </div>

        <div class="centrar">
          <div class="img-info-deportes">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhS4vGfVzm7MIJPJae8VCyUi4GZmnE2_zM2k0x39R1SKBF5usjB8GY2IXTMVgvC9SlRgI&usqp=CAU  " class="foto-info-deportes" alt="">
            <div class="info-deportes" id="rugby-subacuatico">
              <h1>rugby subacuatico</h1>
              <h3>El juego se desarrolla entre dos equipos (azul y blanco), cada uno con seis jugadores en el campo y cinco o seis sustitutos, los cuales intentan marcar puntos colocando el balón en la cesta del equipo contrario. La pelota tiene flotabilidad negativa debido a la solución salina con que se rellena.</h3>
              <a href="rugby_subacuatico.html" class="btn btn-primary">ver equipo</a>
            </div>
          </div>
        </div>

        <div class="centrar">
          <div class="img-info-deportes">
            <img src="https://www.watsaysurfschool.com/wp-content/uploads/2021/07/historia-de-los-campeonatos-de-surf-1.jpg" class="foto-info-deportes" alt="">
            <div class="info-deportes" id="surf">
              <h1>surf</h1>
              <h3>El surf es un deporte acuático de superficie en el que un surfista , utiliza una tabla para cabalgar sobre la sección delantera o la cara de una ola en movimiento, que normalmente lleva al surfista hacia la orilla. Las olas adecuadas para el surf se encuentran principalmente en las costas oceánicas.</h3>
              <a href="equipo-remo.html" class="btn btn-primary">ver equipo</a>
            </div>
          </div>
        </div>
     

        <div class="centrar">
          <div class="info_club">
            <div class="grid">

            <div class="club">
              <h1>info del club</h1>
              <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum ea dolores ab, rem maxime veritatis fugiat sint nobis fuga quia debitis, exercitationem, assumenda deserunt voluptatem autem laudantium voluptatum? Rem, accusamus.</h3>
            </div>

            <div class="redes">
              <h1>Contactanos</h1>
              <div class="redes-icon">
              <img class="" src="https://cdn-icons-png.flaticon.com/256/3621/3621435.png" alt=""><a href=""><h3>@maxi_mayorga</h3></a>
              </div>
              <div class="redes-icon">
              <img src="https://cdn-icons-png.flaticon.com/256/124/124010.png" alt=""><a href=""><h3>@xxxxxx</h3></a>
            </div>
              <div class="redes-icon">
             <img src="https://cdn.iconscout.com/icon/free/png-256/free-google-mail-new-4762011-3955524.png?f=webp" alt=""> <a href=""><h3>aeaea@gmail.com</h3></a>
            </div>
            </div>

          </div>
          </div>
        </div>
    </main>

  
</body>


<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>