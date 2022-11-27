<?php
$nombre = 'ALV';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link href="style.css" rel="stylesheet" />
    <link href="calendario.css" rel="stylesheet" />
    <title>Agenda</title>
  </head>
  <body>
    <!--Navegacion-->
    <div id="nav-placeholder"></div>
    <script>
      $(function () {
        $("#nav-placeholder").load("header.html");
      });
    </script>
    <main>
      <div class="contenedor">
        <div class="container-fluid">
            <!-- Show agenda elements dinamically -->
            <h3><?php echo $nombre?></h3>
            </script>
        </div>
      </div>
    </main>
  </body>
</html>
