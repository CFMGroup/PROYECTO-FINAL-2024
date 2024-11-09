<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="CFMGroup" content="Programming">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <title> LOGIN EduConnect </title>
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="css/login.css">
        <style>
            .error {
                color: #ff0000;
                margin-top: 10px;
            }
        </style>
    </head>
    
    <body>
        <div id="contenedor">
            <div id="contenedorcentrado">
                <div id="login">
                    <form action="validar.php" method="post">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" name="usuario" placeholder="usuario" required>
                        
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="contraseña" placeholder="contraseña" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                    </form>
                    <?php
                        if (isset($_GET['error']) && $_GET['error'] == 1) {
                            echo '<p class="error">ACCESO DENEGADO - El usuario o la contraseña son incorrectos.</p>';
                        }
                    ?>
                </div>
                <div id="derecho">
                    <div class="titulo">
                        <img id="imgEduConnect" src="img/EduConnect2.png" alt="LogoSistema">
                        <p>Bienvenido</p>
                    </div>
                    <hr>
                    <div class="pie-form">
                        <p>Si perdiste tu contraseña, habla con los directivos de la institución para recuperarla.</p>
                        <hr>
                        <a href="index.php">« Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
