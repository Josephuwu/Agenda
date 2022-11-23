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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link href="styles.css" rel="stylesheet" />
    <title>Sign in</title>
</head>
<body>
    <main>
        <div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <input
                  type="input"
                  class="form-control rounded-3"
                  id="nombre"
                  name="nombre"
                  placeholder="Tu nombre"
                />
                <label for="correo">Email address</label>
                <input
                  type="password"
                  class="form-control rounded-3"
                  id="password"
                  name="password"
                  placeholder="Password"
                />
                <label for="password">Password</label>
                <button
                class="w-100 mb-2 btn btn-lg rounded-3 btn-primary"
                type="submit"
                >
                Sign in
              </button>
            </form>
        </div>
    </main>
</body>
</html>