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
            <a href="../index.html"><img src="../imagenes/corazon.jpg.jpeg" title="Menú" draggable="false"></a>
        </article>
        <!--HTML Buscador: https://www.youtube.com/watch?v=Gqto7IflO84&ab_channel=MagtimusPro-->
        <div class="buscar1">         
            <input type="search" id="buscador" placeholder="Buscar Aquí...">
                <div class="buscar">
                    <div class="contenido">
                        <ul>
                            <li class="pagina"><a href="../index.html">Inicio</a></li>
                            <li class="pagina"><a href="../html/calculadora.html">Calculadora</a></li>            
                            <li class="pagina"><a href="../html/cardiologia.html">Cardiología</a></li>
                            <li class="pagina"><a href="../html/formulario2.html">Formulario Paciente</a></li>
                            <li class="pagina"><a href="../html/formulariofina.html">Formulario Registro</a></li>
                            <li class="pagina"><a href="../html/horarios_ubicacion.html">Horarios y Ubicación</a></li>
                            <li class="pagina"><a href="../html/neurologia.html">Neurología</a></li>
                            <li class="pagina"><a href="../html/traumatologia.html">Traumatología</a></li>
                            <li class="pagina"><a href="../html/oncologia.html">Oncología</a></li>
                            <li class="pagina"><a href="#">Imagenes del Centro</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <article class="article2">
                <img src="../imagenes/corazon2.jpg">
                <a href="../html/formulario2.html"><img src="../imagenes/globo.png" title="Cerrar Sesión" draggable="false"></a>
            </article>
            <?php require("_informacion_paciente.php") ?>