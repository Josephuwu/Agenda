<?php
    if ($_POST) {
        try {
            $nombre = $_POST['nombre-nota'];
            $nota = $_POST['nota'];

            $conexion = new PDO('mysql:host=localhost;dbname=tienda', 'root', '');
            $consulta = $conexion->prepare('INSERT INTO usuario VALUES (NULL, :nombre, :nota)');    
    
            $consulta->execute(array(":nombre" => $nombre, ":nota" => $nota));
            header('Location: calendario.php');
            
        } catch (PDOException $e) {
            echo "Vale madre: " . $e->getMessage();
        }
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
    <title>Agenda Mamamlona</title>
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
          <h2>Ingrese su nota</h2>
          <form
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
            method="post"
          >
            <div class="input-group mb-3">
              <span class="input-group-text">Nombre</span>
              <input id="nombre-nota" type="text" class="form-control" />
            </div>
            <div class="input-group">
              <textarea
                id="nota"
                class="form-control"
                aria-label="With textarea"
                rows="15"
              ></textarea>
            </div>
            <button type="button boton" class="btn btn-outline-primary">
              Guardar
            </button>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
