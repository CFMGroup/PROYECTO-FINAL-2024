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
                <li class="main-menu__item"><img src="img/Reporte_d.png" alt="Reportar insidencia" class="imgmenu"><a href="docentes_Ina.php" class="main-menu__link">REPORTAR INASISTENCIA</a></li>
                <li class="main-menu__item"><img src="img/Consulta_b.png" alt="PLANILLA REPORTE DE SALA" class="imgmenu"><a href="Docentes_pla.php" class="main-menu__link">PLANILLA REPORTE DE SALA</a></li>
                <li class="main-menu__item"><img src="img/Salida_b.png" alt="Consulta de inasistencia" class="imgmenu"><a href="../login.php" class="main-menu__link">SALIR</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>REPORTE DE INASISTENCIA</h2><br>
                
        <div class="container">
            <form class="form" action="reporte_inasistencia_d.php" method="post">
                <h3>Por favor completa los datos</h3>
                <p>Recuerda ser preciso y cuidadoso con los datos, tus alumnos lo podrán visualizar</p>
                <div class="input-group">
                    <input type="number" id="CI" name="CI" required>
                    <label for="CI">Número de Cédula</label>
                </div>
                <div class="input-group">
                    <input type="date" id="Fecha_Inicio" name="Fecha_Inicio" required>
                    <label for="Fecha_Inicio">Fecha de Inicio</label>
                </div>
                <div class="input-group">
                    <input type="date" id="Fecha_Fin" name="Fecha_Fin" required>
                    <label for="Fecha_Fin">Fecha de Fin</label>
                </div>
                <div class="input-group">
                    <input type="text" id="Motivo" name="Motivo">
                    <label for="Motivo">Apellido & Motivo</label>
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
        </section>
        <section>
        <h3>IMAGEN PLANILLA</h3> <br>
            <div>
                    <img src="img/inasistencia.png" alt="informacion de reporte" id="imgreporte_d">
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
