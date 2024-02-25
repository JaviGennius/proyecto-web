<?php
    $titulo = "Traumatologia";
?>
<?php require("initdb.php");
    $consulta2 = "SELECT Nombre_servicio FROM servicios INNER JOIN departamentos ON departamentos.ID_departamento = servicios.ID_departamento WHERE Nombre_departamento = '$titulo';";
    $guardar2 = $con -> query($consulta2);
    $consulta3 = "SELECT Descripcion_departamento FROM departamentos WHERE Nombre_departamento = '$titulo';";
    $guardar3 = $con -> query($consulta3);
    $consulta4 = "SELECT Nombre_sanitario, Tipo_sanitario, Especialidad FROM sanitarios INNER JOIN departamentos ON departamentos.ID_departamento = sanitarios.ID_departamento WHERE Nombre_departamento = '$titulo';";
    $guardar4 = $con -> query($consulta4);
?>
<?php require("_header-trauma.php");?>
<main>
<section class="descripcion">
        <h3 class="h3">Descripción</h3>
        <?php
            while($row3 = $guardar3->fetch_assoc()) {
                echo "<p>" . $row3['Descripcion_departamento'] . "</p>";
            }
        ?>
    </section>

    <section class="servicios">
        <h3 class="h3">Servicios</h3>
        <ul>
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
            <img src="../imagenes/c14.jpeg" draggable="false" onmouseover="flip7()" onmouseout="flipout7()" id="traumatologo1">
            <p>Dr. Felipe Gimenez<br>Lumbalgia</p>          
        </div>
        <div class="c2">
            <img src="../imagenes/c15.jpeg" draggable="false" onmouseover="flip8()" onmouseout="flipout8()" id="traumatologo2">
            <p>Dr. Daniel García<br>Fracturas de todo tipo</p>
        </div>
        <div class="c3">
            <img src="../imagenes/c13.jpeg" draggable="false" onmouseover="flip22()" onmouseout="flipout22()" id="traumatologo4">
            <p>Dr. José Pérez<br>Contracturas musculares</p>
        </div>
        <div class="c4">
            <img src="../imagenes/c11.jpeg" draggable="false" onmouseover="flip21()" onmouseout="flipout21()" id="traumatologo5">
            <p>Dra. Eva Hernando<br>Las muñecas y manos</p>
        </div>
        <div class="c5">
            <img src="../imagenes/c16.jpeg" draggable="false" onmouseover="flip20()" onmouseout="flipout20()" id="traumatologo6"/>
            <p>Dr. Carlos Rodríguez<br>La cadera</p>
        </div>
        <div class="c6"> 
            <img src="../imagenes/c12.jpg" draggable="false" onmouseover="flip9()" onmouseout="flipout9()" id="traumatologo3">
            <p>Dra. Carla Fernandez<br>Sindrome del túnel carpiano</p>
        </div>
    </div><br><br>
</main>
<script src="../js/chatb.js"></script>
<?php
    session_start(); 
    if($_SESSION['dni_usuario']){
        require_once("_footer-cerrar.php");
    }else {
            require("_footer.php");
    }
    require("_contacto-depart.php");
?>