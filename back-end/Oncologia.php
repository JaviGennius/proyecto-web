<?php
    $titulo = "Oncologia"; // Variable
?>
<?php require("initdb.php"); // Archivo de inicialización de la base de datos
    // Consulta para obtener los nombres de los servicios relacionados con el departamento de Oncologia
    $consulta2 = "SELECT Nombre_servicio FROM servicios INNER JOIN departamentos ON departamentos.ID_departamento = servicios.ID_departamento WHERE Nombre_departamento = '$titulo';";
    $guardar2 = $con -> query($consulta2); // Ejecuta la consulta
    $consulta3 = "SELECT Descripcion_departamento FROM departamentos WHERE Nombre_departamento = '$titulo';";// Consulta para obtener la descripción del departamento de Oncologia
    $guardar3 = $con -> query($consulta3);
    
?>
<?php require("_header-onco.php");?>
<main>
    <section class="descripcion">
        <h3 class="h3">Descripción</h3>
        <!-- Muestra la descripción del departamento -->
        <?php
            while($row3 = $guardar3->fetch_assoc()) {
                echo "<p>" . $row3['Descripcion_departamento'] . "</p>";
            }
        ?>
    </section>

    <section class="servicios">
        <h3 class="h3">Servicios</h3>
        <ul>
            <!-- Muestra la descripción de los sevicios -->
            <?php
                while($row2 = $guardar2->fetch_assoc()) {
                    echo "<li>" . $row2['Nombre_servicio'] . "</li>";
                }
            ?>
        </ul>
    </section>
    <details open class="chatbotrobot">
        <summary><img src="../imagenes/CBOT.png" class="imagenchatbot" onclick="openchatbot()"/></summary>
        <div class="chatbot" id="chat-contenedor">
            <div id="chat-mensaje"></div>
            <input type="text" id="usuario-input" placeholder="Escribe un mensaje...">
            <button id="boton-enviar" onclick="sendMessage()">Enviar</button>
        </div>
    </details>
    <h3 class="h3">Nuestros profesionales</h3>
    <div class="cardiologos">
        <div class="c1">
            <img src="../imagenes/c21.png" draggable="false" onmouseover="flip4()" onmouseout="flipout4()" id="oncologo1">
            <p>Dr. Nicolás Urioitia<br>Quimioterapia</p>          
        </div>
        <div class="c2">
            <img src="../imagenes/c18.jpg" draggable="false" onmouseover="flip5()" onmouseout="flipout5()" id="oncologo2">
            <p>Dr. Paco Urrutia<br>Cualquier tipo de cáncer</p>
        </div>
        <div class="c3">
            <img src="../imagenes/c19.jpg" draggable="false" id="oncologo4" onmouseover="flip17()" onmouseout="flipout17()">
            <p>Dr. Javier Espada<br>Terapia hormonal</p>
        </div>
        <div class="c4">
            <img src="../imagenes/c17.jpg" draggable="false" id="oncologo5" onmouseover="flip18()" onmouseout="flipout18()">
            <p>Dra. Alba <br>Terapia biológica</p>
        </div>
        <div class="c5">
            <img src="../imagenes/c22.jpeg" draggable="false" id="oncologo6" onmouseover="flip19()" onmouseout="flipout19()"/>
            <p>Dr. Mikel Oyarzabal<br>Oncología de radiación</p>
        </div>
        <div class="c6"> 
            <img src="../imagenes/c23.jpg" draggable="false" onmouseover="flip6()" onmouseout="flipout6()" id="oncologo3">
            <p>Dr. David Almendra<br>Cáncer en adultos</p>
        </div><br><br>
    </main>
<script src="../js/chatb.js"></script>
<?php 
    require("_footer.php");
    require("_contacto-depart.php");
?>