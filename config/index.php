<?php 
    if($_POST){
        header("location:inicio.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login Pagina web</title>
</head>
<body>
    <div class="tmplate-login">
        <div class="ctn-login">
            <div>
                <h2>Login</h2>
            </div>
            <form action="" method="post">
                <div>
                    <label for="nombre">Usuario :</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div>
                    <label for="contra">Contraseña</label>
                    <input type="text" name="contraseña" id="contra">
                </div>
                <div class="btn-submit-enviar">
                    <input type="submit" value="Iniciar Sesion">
                </div>
            </form>

        </div>

    </div>
</body>
</html>