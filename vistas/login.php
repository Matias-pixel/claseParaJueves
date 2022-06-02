<?php
    if(isset($_REQUEST["btn_enviar"])){

        $usuario =  $_REQUEST["txt_usu"];
        $contra =$_REQUEST["txt_pass"] ;

        if($usuario == "matias" && $contra == "123" ){
            header("location: ../vistas/verDatos.php");
        }else{
            header("location: ../index.html");
        }

    }else{
        echo "No hay variables";

    }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Clase Sesiones</title>
  </head>
  <body>
    <h1> Home sesiones</h1>

    <div class="container">
        <nav>
            <a href="../index.html" class="btn btn-outline-primary">Home</a>
            <a href="#" class="btn btn-outline-primary" >Formulario de persona </a>
        </nav>
        <hr>
        <br>
        <form action="login.php" method="POST">
            <label for="txt_usuario" class="form-label">Digite su Usuario: </label>
            <input type="text" name="txt_usu" id="txt_usuario" class="form-control" required>

            <label for="txt_passs" class="form-label">Ingrese su Contraseña: </label>
            <input type="password" name="txt_pass" id ="txt_passs" class="form-control" required>
            <br>

            <input type="submit" value="Enviar" name = "btn_enviar" class="btn btn-outline-primary">
           




        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>