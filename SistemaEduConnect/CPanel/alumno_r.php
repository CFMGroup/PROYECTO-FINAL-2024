<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formularios.css">
    <title id="titulo">INICIO - PORTAL DE GESTION ESTUDIANTES</title>
</head>
<body>
    <header id="header">
        <div id="Logo">
            <img src="img/Edu-Connect.png" alt="Logo principal de la utu colon" id="LogoPrincipal">
        </div>
        <h1 id="h1Titulo">Sistema de Gestión Estudiante</h1>
        <nav class="main-nav">
            <div id="toggle-menu" class="toggle-menu">
                <img src="img/menu.svg" alt="menu">
            </div>
            <ul id="main-menu" class="main-menu">
                <li class="main-menu__item"><img src="img/Estudiante_b.png" alt="inicio estudiante" class="imgmenu"><a href="alumno.php" class="main-menu__link">INICIO</a></li>
                <li class="main-menu__item"><img src="img/Reporte_b.png" alt="Reportar incidencia" class="imgmenu"><a href="alumno_r.php" class="main-menu__link">REPORTE DE INCIDENCIA</a></li>
                <li class="main-menu__item"><img src="img/Consulta_b.png" alt="Consulta de inasistencia" class="imgmenu"><a href="alumno_c.php" class="main-menu__link">CONSULTA INASISTENCIA</a></li>
                <li class="main-menu__item"><img src="img/Salida_b.png" alt="Consulta de inasistencia" class="imgmenu"><a href="../login.php" class="main-menu__link">SALIDA</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>INGRESAR REPORTE DE INCIDENCIA</h2><br>
            <article>y
                <div class="container">
                    <form class="form" action="reporte_incidencia_alumno.php" method="post">
                        <h3>Planilla de reporte</h3>
                        <p>Recuerda, cada tu seras el responsable de cada reporte.</p>
                        <div class="input-group">
                            <input type="number" id="CI" name="CI" required>
                            <label for="CI">Número de Cédula</label>
                        </div>
                        <div class="input-group">
                            <input type="number" id="ID_Sala" name="ID_Sala" required>
                            <label for="ID_Sala">Número de Sala</label>
                        </div>
                        <div class="input-group">
                            <input type="number" id="N_Maquina" name="N_Maquina" required>
                            <label for="N_Maquina">Número de Máquina</label>
                        </div>
                        <div class="input-group">
                            <input type="text" id="Monitor" name="Monitor">
                            <label for="Monitor">Monitor</label>
                        </div>
                        <div class="input-group">
                            <input type="text" id="Teclado" name="Teclado">
                            <label for="Teclado">Teclado</label>
                        </div>
                        <div class="input-group">
                            <input type="text" id="Mouse" name="Mouse">
                            <label for="Mouse">Mouse</label>
                        </div>
                        <div class="input-group">
                            <input type="text" id="Torre" name="Torre">
                            <label for="Torre">Torre</label>
                        </div>
                        <button type="submit">ENVIAR REPORTE</button>
                    </form>

                    <!-- Mostrar mensaje de éxito o error -->
                    <?php
                    session_start();
                    if (isset($_SESSION['mensaje'])) {
                        echo "<p style='color: green;'>" . $_SESSION['mensaje'] . "</p>";
                        unset($_SESSION['mensaje']); // Limpiar el mensaje después de mostrarlo
                    }
                    ?>
                </div><br>
            </article>
        </section>

        <section>
            <h2>AYUDA</h2><br>
            <div>
                <img src="img/Reporte_de_equipos.png" alt="información de reporte" id="imgreporte">
            </div>
        </section>
    </main>
    <footer>
        &copy; EduConnect - Todos los derechos reservados - 2024 <br>
        Diseñado por <a href="#">CFM Group</a>
    </footer>
    <script src="script.js"></script>
</body>
</html>
