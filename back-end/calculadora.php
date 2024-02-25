<?php 
$titulo = "Calculadora";
?>
<?php require("_header-calculadora.php");?>
    <main>
    <div class="enunciado">
    <h1 id="iniciocalc">Calculadora de Calorías Diarias</h1>	
    </div>
    <div class="genero">
        <div class="hombre">
        <img src="../imagenes/hombre.png" class="sexoicono" draggable="false">
        <p class="sexoh"><input  type="radio" value="1" name="sexo" id="sexo" checked/>Hombre</p>
        </div>
        <div class="mujer">
        <img src="../imagenes/mujer.png" class="sexoicono" draggable="false"></td>		
        <p class="sexom"><input  type="radio" value="2" name="sexo" id="sexo"/>Mujer</p>
        </div>
    </div>
    <div class="peso_talla">
        <div class="peso">
        <img src="../imagenes/peso1.png" draggable="false">
        <p><label class="preguntar"><label for="peso" class="ejercicios">Peso: </label><input type="number"  value="0" name="peso" min="0" max="300" id="peso"> Kg</label></p>
        </div>
        <div class="edad">
        <img src="../imagenes/edad.png" draggable="false">
        <p><label class="preguntar"><label for="edad" class="ejercicios">Edad: </label><input type="number"  value="0" id="edad" name="edad" min="0" max="100"></label></p>
        </div>
        <div class="altura">
        <img src="../imagenes/altura.png" draggable="false">
        <p><label class="preguntar"><label for="altura" class="ejercicios">Altura: </label><input type="number" value="0" id="altura" name="altura" min="0" max="250"> cm</p>
        </div>
    </div>
    <div class="tipo_ejercicio">
        <h5>Tipo de ejercicio</h5>
        <div class="sedentario">
            <img src="../imagenes/sedentario.png"draggable="false">
            <p><input type="radio" value="1" name="pregunta" id="nada" checked/>Muy Ligero (1 hora/semana)</p>
        </div>
        <div class="ligero">
            <img src="../imagenes/moderado.png" draggable="false">
            <p><input type="radio" value="2" name="pregunta" id="nada"/>Ligero (1-2 horas/semana)</p>
        </div>
        <div class="moderado">
            <img src="../imagenes/parcial.png" draggable="false">
            <p><input type="radio" value="3" name="pregunta" id="poco"/>Moderado (3-5 horas/semana)</p>
        </div>
        <div class="activo">
            <img src="../imagenes/andador.png" draggable="false">
            <p><input type="radio" value="4" name="pregunta" id="diario"/>Activo (8-10 horas/semana)</p>
        </div>
        <div class="deportista">
            <img src="../imagenes/deportista.png" draggable="false">
            <p><input type="radio" value="5" name="pregunta" id="depor"/>Muy Activo (+10 horas/semana)</p>
        </div>
    </div>
    <div class="botones">
        <input type="button" id="abrir_correo" value="Calcular" class="boton" onclick="calcular()">
        <input type="reset" value="Resetear Valores" onclick="resetear()" class="boton">
    </div>
    <!--HTML MODAL: https://www.youtube.com/watch?v=9guclqCu6Hc&ab_channel=JuanSebasti%C3%A1nHerreraCarvajal-->
    <?php require("_modal.php"); ?>
    <?php require("_resultados-calculadora.php"); ?>
<?php 
session_start(); 
    if($_SESSION['dni_usuario']){
        require_once("_footer-cerrar.php");
    }else {
            require("_footer.php");
    }
    require("_contacto-hospital.php");
?>