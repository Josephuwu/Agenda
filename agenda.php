<?php
 try {
  $conexion = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');
  $nombre_Nota;
  $Nota;
  session_start();
  $usuario = $_SESSION["usuario"];

  $query="SELECT * FROM usuario WHERE Nombre = '".$usuario."'";
        
  $resultado1 = $conexion->query($query);
  $resultado1->execute();

  foreach($resultado1 as $fila){
      $idUsuario = $fila['idUsuario'];
  }

  $con = "SELECT Nombre, Nota FROM nota WHERE idUsuario = '".$idUsuario."'"; 

  $consulta = $conexion->query($con); 
  $consulta->execute(); 
  
  foreach($consulta as $fila){
    $Nota[] = array('Nombre' => $fila['Nombre'], 'Nota' => $fila['Nota']);
  }

  /* Fill Eventos */
  $con = "SELECT Nombre, Descripcion, Fecha, Hora FROM evento";
  $consulta2 = $conexion->query($con);
  $consulta2->execute();

  foreach($consulta2 as $fila){
    $Eventos[] = array('Nombre' => $fila['Nombre'], 'Descripcion' => $fila['Descripcion'], 'Fecha' => $fila['Fecha'], 'Hora' => $fila['Hora']);
  }

} catch (PDOException $e) {
  echo "Vale madre: " . $e->getMessage();
}
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
            <h3>Notas</h3>
            <p><?php
                foreach($Nota as $fila){
                    echo "<h4> Nombre: ".$fila['Nombre']."</h4>";
                    echo "<p> Nota: ".$fila['Nota']."</p>";
                    echo "<br>";
                }
            ?></p>
            <h3>Eventos</h3>
            <p><?php
                foreach($Eventos as $fila){
                    echo "<h4> Nombre: ".$fila['Nombre']."</h4>";
                    echo "<p> Descripcion: ".$fila['Descripcion']."</p>";
                    echo "<p> Fecha: ".$fila['Fecha']."</p>";
                    echo "<p> Hora: ".$fila['Hora']."</p>";
                    echo "<br>";
                }?>
        </div>
      </div>
    </main>
  </body>
</html>
