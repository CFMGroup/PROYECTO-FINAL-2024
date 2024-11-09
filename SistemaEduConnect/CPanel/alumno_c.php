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
        <li class="main-menu__item"><img src="img/Reporte_b.png" alt="Reportar insidencia" class="imgmenu"><a href="alumno_r.php" class="main-menu__link">REPORTE DE INSIDENCIA</a></li>
        <li class="main-menu__item"><img src="img/Consulta_b.png" alt="Consulta de inasistencia" class="imgmenu"><a href="alumno_c.php" class="main-menu__link">CONSULTA INASISTENCIA</a></li>
        <li class="main-menu__item"><img src="img/Salida_b.png" alt="Consulta de inasistencia" class="imgmenu"><a href="../login.php" class="main-menu__link">SALIDA</a></li>
    </ul>
</nav>

    </header>
    <main>
    <section id="noticias1">
    <h2>INGRESE EL APELLIDO DEL DOCENTE</h2>
        <article>
            <h2>APELLIDO</h2>
        <div class="container">
        <div class="input-group">
                <input type="text" name="caja_busqueda" id="caja_busqueda"><br>
                <button type="submit" id="consultar">CONSULTAR</button><br>
                <p id="busqueda"></p>
                        </div>
            </div>
            <div id="datos">
            </div>
        </article>
    </section>
</main>
    <footer>
        &copy; EduConnect - Todos los derechos reservados - 2024 <br>
        Diseñado por <a href="#">CFM Group</a>
    </footer>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="busqueda.js"></script>
    <script src="script.js"></script>
</body>
</html>
