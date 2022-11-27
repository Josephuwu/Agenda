<?php
    if ($_POST) {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];

            session_start();

            $consulta = $conexion->prepare('INSERT INTO evento VALUES (NULL, :nombre, :descripcion, :fecha, :hora)');    
    
            $consulta->execute(array(":nombre" => $nombre, ":descripcion" => $descripcion, ":fecha" => $fecha, ":hora" => $hora));
            header('Location: eventos.html');

        } catch (PDOException $e) {
            echo "Vale madre: " . $e->getMessage();
        }
    }
    else{
        echo "Chinga tu madre";
    }
?>

