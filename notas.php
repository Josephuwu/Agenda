<?php
    if ($_POST) {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');
            $nombre = $_POST['nombre-nota'];
            $nota = $_POST['nota'];

            session_start();
            $usuario = $_SESSION["usuario"];
            $query="SELECT * FROM usuario WHERE Nombre = '".$usuario."'";
            
            $resultado1 = $conexion->query($query);
            $resultado1->execute();

            foreach($resultado1 as $fila){
                $idUsuario = $fila['idUsuario'];
            }

            if(empty($idUsuario)){
              header("Location: index.html");
            }

            $consulta = $conexion->prepare('INSERT INTO nota VALUES (NULL, :nombre, :nota, :idUsuario)');    
    
            $consulta->execute(array(":nombre" => $nombre, ":nota" => $nota, ":idUsuario" => $idUsuario));
            header('Location: notas.html');

        } catch (PDOException $e) {
            echo "Vale madre: " . $e->getMessage();
        }
    }
    else{
        echo "Chinga tu madre";
    }
?>
