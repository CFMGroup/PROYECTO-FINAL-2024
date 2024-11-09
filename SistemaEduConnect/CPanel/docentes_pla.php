<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formulario_docente.css">
    <title id="titulo">INICIO - PORTAL DE GESTION DOCENTES</title>
</head>
<body>
    <?php session_start(); ?>

    <header id="header">
        <div id="Logo">
            <img src="img/Edu-Connect.png" alt="Logo principal de la utu colon" id="LogoPrincipal">
        </div>
        <h1 id="h1Titulo">Sistema de Gestión Docente</h1>
        <nav class="main-nav">
            <div id="toggle-menu" class="toggle-menu">
                <img src="img/menu.svg" alt="menu">
            </div>
            <ul id="main-menu" class="main-menu">
                <li class="main-menu__item"><img src="img/Docente.png" alt="inicio docente" class="imgmenu"><a href="docentes.php" class="main-menu__link">INICIO</a></li>
                <li class="main-menu__item"><img src="img/Reporte_d.png" alt="Reportar incidencia" class="imgmenu"><a href="docentes_Ina.php" class="main-menu__link">REPORTAR INASISTENCIA</a></li>
                <li class="main-menu__item"><img src="img/Consulta_b.png" alt="PLANILLA REPORTE DE SALA" class="imgmenu"><a href="Docentes_pla.php" class="main-menu__link">PLANILLA REPORTE DE SALA</a></li>
                <li class="main-menu__item"><img src="img/Salida_b.png" alt="Consulta de inasistencia" class="imgmenu"><a href="../login.php" class="main-menu__link">SALIR</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section>
            <h2>PLANILLA REPORTE DE SALA</h2><br>
            <article>
                
                <div class="container">
                    <form class="form" action="reporte_incidencia_docente.php" method="post">
                        <h3>Formulario de Datos</h3>
                        <p>Habilita un reporte para que los alumnos completen la informacion de su computadora.</p>
                        <div class="input-group">
                            <input type="number" id="ID_Sala" name="ID_Sala" required>
                            <label for="ID_Sala">Numero de Sala</label>
                        </div>
                        <div class="input-group">
                            <input type="date" id="Fecha" name="Fecha" required>
                            <label for="Fecha">Fecha</label>
                        </div>
                        <div class="input-group">
                            <input type="time" id="Hora" name="Hora" required>
                            <label for="Hora">Hora</label>
                        </div>
                        <div class="input-group">
                            <input type="text" id="Descripcion" name="Descripcion">
                            <label for="Descripcion">Descripcion - Docente responsable</label>
                        </div>
                        <button type="submit">ENVIAR REPORTE</button>
                        
                        <?php 
                        if (isset($_SESSION['mensaje'])) {
                            echo "<p style='color: green;'>" . $_SESSION['mensaje'] . "</p>";
                            unset($_SESSION['mensaje']); // Limpiar el mensaje después de mostrarlo
                        }
                        ?>
                    </form>
                </div>
            </article>
        </section>
        <section>
            <h3>IMAGEN PLANILLA</h3> <br>
            <div>
                    <img src="img/Planilla.jpg" alt="informacion de reporte" id="imgreporte_d">
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
