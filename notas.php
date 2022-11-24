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