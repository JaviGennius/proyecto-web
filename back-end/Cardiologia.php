<?php
    $titulo = "Cardiologia";
?>
<?php require("initdb.php");
    $consulta2 = "SELECT Nombre_servicio FROM servicios INNER JOIN departamentos ON departamentos.ID_departamento = servicios.ID_departamento WHERE Nombre_departamento = '$titulo';";
    $guardar2 = $con -> query($consulta2);
    $consulta3 = "SELECT Descripcion_departamento FROM departamentos WHERE Nombre_departamento = '$titulo';";
    $guardar3 = $con -> query($consulta3);

?>
<?php require("_header-cardio.php");?>
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
                <img src="../imagenes/cardiolog1.jpg" draggable="false" onmouseover="flip()" onmouseout="flipout()" id="cardiologo1" draggable="false">
                <P>Dr. Fernando Alonso<br> Accidentes cardiovasculares</P>
            </div>
            <div class="c2">
                <img src="../imagenes/c3.jpg" draggable="false" onmouseover="flip2()" onmouseout="flipout2()" id="cardiologo2">
                <p>Dra. Carla Fernández<br>Medicina vascular</p>
            </div>
            <div class="c3">
                <img src="../imagenes/c2.jpg" draggable="false" id="cardiologo4" onmouseover="flip13()" onmouseout="flipout13()">
                <p>Dr. Antonio Herrero <br>Cardiología general</p> 
            </div>
            <div class="c4">
                <img src="../imagenes/c4.png" draggable="false" id="cardiologo5" onmouseover="flip14()" onmouseout="flipout14()">
                <p>Dra. Ana Sánchez<br>Cardiopatía congénita</p>
            </div>
            <div class="c5">
                <img src="../imagenes/c5.jpeg" draggable="false" id="cardiologo6" onmouseover="flip15()" onmouseout="flipout15()">
                <p>Dr. Carlos Rodríguez<br>Enfermedad vascular periférica</p>
            </div>
            <div class="c6">
                <img src="../imagenes/c6.jpg" draggable="false" onmouseover="flip3()" onmouseout="flipout3()" id="cardiologo3">
                <p>Dr. José Pérez<br>Insuficiencia cardíaca</p>
            </div>
        </div>
        <br><br>
    </main>
<script src="../js/chatb.js"></script>
<?php 
    require("_footer.php");
    require("_contacto-depart.php");
?>