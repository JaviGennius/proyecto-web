<?php
    $estilos = "<link rel='stylesheet' type='text/css' href='../css/imagenescentro.css'>";
    require("initdb.php");
    $titulo = "Imagenes del centro"; // Variable // Definir el título de la página
    $consulta3 = "SELECT Imagen_centro, Title FROM imagenes_centro;"; // Consulta para obtener la imagen y el titulo de la tabla imagenes_centro
    $guardar2 = $con -> query($consulta3); // Ejecuta la consulta
?>
<?php require("_header.php");?>
<header id="cabecera">
            <a href="../index.html"><img src="../imagenes/hospital.png" title="Inicio" class="image2" draggable="false"/></a>
            <h1>Imágenes del centro</h1>
        </header>
        <?php require("_menuimagenes.php"); ?>
<div class="informacion">
            <h1>Explora el Hospital Felipe VI a través de imágenes</h1>
            <br>
            <p>
            <h2>
                En el Hospital Felipe VI, compartimos momentos que reflejan la dedicación y el cuidado en cada área, desde Oncología hasta espacios de bienestar. 
                Sumérgete en la atmósfera única del hospital, donde cada imagen cuenta una historia de compromiso con la salud y el bienestar de nuestros pacientes.
            </h2>
            </p>
        </div>

        <div class="img-completa" id="imgcompletacaja">
            <img src="..imagenes/hospitalslicer.png" id="imgcompleta">
            <span onclick="cerrarImagen()">X</span>
        </div>
        <!-- Genera la galería de imágenes del centro a partir de los resultados de la consulta -->
        <div class="galeria">
        <?php
            while($row2 = $guardar2->fetch_assoc()) {
                echo "<img src='" . $row2['Imagen_centro'] . "' onclick='abririmagen(this.src)' title='" . $row2['Title'] . "'>";
            }
        ?>
        </div>
        <script src="../js/imagenescentro.js"></script>
    <?php 
        require("_footer.php");
        require("_contacto-hospital.php");
    ?>