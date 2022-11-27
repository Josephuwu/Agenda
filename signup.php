<?php
    if ($_POST) {
        try {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $password = $_POST['password'];

            $conexion = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');
            $consulta = $conexion->prepare('INSERT INTO usuario VALUES (NULL, :nombre, :correo, :contra)');    
    
            $consulta->execute(array(":nombre" => $nombre, ":correo" => $correo, ":contra" => $password));
            header('Location: index.html');
            
        } catch (PDOException $e) {
            echo "Vale madre: " . $e->getMessage();
        }
    }
    else{
        echo 'no hay datos';
    }
?>