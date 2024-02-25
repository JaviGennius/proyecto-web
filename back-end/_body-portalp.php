<body>
    <header>
    <video autoplay muted preload loop>
        <source src="../videos/video1.mp4" type="video/mp4"/>
    </video>
    <h1>Portal del Paciente</h1>
    </header>
    <main>
        <article class="article1">
            <img src="../imagenes/portal1.jpg">
            <a href="../back-end/index.php"><img src="../imagenes/corazon.jpg.jpeg" title="Menú" draggable="false"></a>
        </article>
        <!--HTML Buscador: https://www.youtube.com/watch?v=Gqto7IflO84&ab_channel=MagtimusPro-->
        <div class="buscar1">         
            <input type="search" id="buscador" placeholder="Buscar Aquí...">
                <div class="buscar">
                    <div class="contenido">
                        <ul>
                            <li class="pagina"><a href="/back-end/index.php">Inicio</a></li>
                            <li class="pagina"><a href="/back-end/calculadora.php">Calculadora</a></li>            
                            <li class="pagina"><a href="/back-end/Cardiologia.php">Cardiología</a></li>
                            <li class="pagina"><a href="/back-end/portal_paciente.php">Portal del Paciente</a></li>
                            <li class="pagina"><a href="#">Formulario Registro</a></li>
                            <li class="pagina"><a href="/back-end/horarios.php">Horarios y Ubicación</a></li>
                            <li class="pagina"><a href="/back-end/Neurologia.php">Neurología</a></li>
                            <li class="pagina"><a href="/back-end/Traumatologia.php">Traumatología</a></li>
                            <li class="pagina"><a href="/back-end/Traumatologia.php">Oncología</a></li>
                            <li class="pagina"><a href="/back-end/imagenescentro.php">Imagenes del Centro</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <article class="article2">
                <img src="../imagenes/corazon2.jpg">
                <a href="https://www.who.int/es"><img src="../imagenes/globo.png" title="Página de la OMS" draggable="false"></a>
            </article>
            <?php require("_informacion_paciente.php") ?>