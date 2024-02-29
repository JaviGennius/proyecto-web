<?php require("initdb.php");
    $ID_departamento = $_GET['ID_departamento'];
    $consulta2 = "SELECT Nombre_servicio FROM servicios INNER JOIN departamentos ON departamentos.ID_departamento = servicios.ID_departamento WHERE departamentos.ID_departamento = ?;";
    $stmt = $con->prepare($consulta2);
    $stmt->bind_param("i", $ID_departamento);
    $stmt->execute();
    $result = $stmt->get_result(); 
    
    $consulta3 = "SELECT Descripcion_departamento FROM departamentos WHERE departamentos.ID_departamento = ?;";
    $stmt = $con->prepare($consulta3);
    $stmt->bind_param("i", $ID_departamento);
    $stmt->execute();
    $result2 = $stmt->get_result(); 
    
    $consulta5 = "SELECT * FROM sanitarios INNER JOIN departamentos ON departamentos.ID_departamento = sanitarios.ID_departamento WHERE departamentos.ID_departamento = ? ORDER BY Posicion_sanitario;";;
    $stmt = $con->prepare($consulta5);
    $stmt->bind_param("i", $ID_departamento);
    $stmt->execute();
    $result5 = $stmt->get_result(); 
?>
<?php require("_header-departamentos.php");?>
<main>
    <section class="descripcion">
        <h3 class="h3">Descripción</h3>
        <?php
            while($row3 = $result2->fetch_assoc()) {
                echo "<p>" . $row3['Descripcion_departamento'] . "</p>";
            }
        ?>
    </section>

    <section class="servicios">
        <h3 class="h3">Servicios</h3>
        <ul>
            <?php
                while($row2 = $result->fetch_assoc()) {
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
    <?php
        while ($row5 = $result5->fetch_assoc()) {
            echo "<div class='" . $row5['Posicion_sanitario'] . "'>";
                echo "<img src='" . $row5['Foto_sanitario'] . "' draggable='false' onmouseover='flip" . $row5['flip'] . "()' onmouseout='flipout" . $row5['flip'] . "()' id='" . $row5['ID_sanitario'] . "'>";
                echo "<p>" . $row5['Nombre_Sanitario'] . "</p>";
                echo "<p>" . $row5['Especialidad'] . "</p>";
                echo "<p>" . $row5['Tipo_sanitario'] . "</p>";
            echo "</div>";
        }
    ?>

    </div>
    <br><br>
</main>
<script src="../js/chatb.js"></script>
<?php 
    require("_footer.php");
    require("_contacto-depart.php");
?>