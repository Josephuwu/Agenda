<?php
    if ($_POST) {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=tienda', 'root', '');
            session_start();
            $resultado = $conexion->query('SELECT * FROM usuario WHERE correo = "' . $_POST['correo'] . '" AND contra = "' . $_POST['contra'] . '"');
           

            if($resultado->RowCount() > 0) {
                foreach($resultado as $fila){
                    $_SESSION["usuario"] = $fila['Nombre'];
                }
                header('Location: index.html');
            } else {
                echo 'Chinga tu madre';
            }
                       
        } catch (PDOException $e) {
            echo "Vale madre: " . $e->getMessage();
        }
    }
    else{
        echo 'no hay datos';
    }
?>
