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
    else{
        echo 'no hay datos';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link href="styles.css" rel="stylesheet" />
    <title>Agenda Mamamlona</title>
</head>

<body>
    <header>
        <img src="" alt="">
        <a href="notas.php">Notas</a>
        <a href="calendario.php">Calendario</a>
        <a href="">Configuracion</a>
    </header>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input id="nombre-nota" type="text" class="form-control" aria-label="Notas" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <textarea id="nota" class="form-control" aria-label="With textarea"></textarea>
            </div>
            <button type="button" class="btn btn-outline-primary">Guardar</button>
        </form>
    </main>
</body>

</html>