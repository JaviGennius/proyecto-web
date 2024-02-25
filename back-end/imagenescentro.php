<?php
    $titulo = "Imagenes del centro";
?>
<?php require("_header-imagenes.php");?>
<div class="informacion">
            <h1>Explora el hospital Felipe VI a través de imágenes</h1>
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
        <div class="galeria">
           <img src="../imagenes/hospitalslicer.png" onclick="abririmagen(this.src)" title="Hospital">
           <img src="../imagenes/saladeingresos.png" onclick="abririmagen(this.src)" title="Sala de ingresos">
           <img src="../imagenes/salaespera.png" onclick="abririmagen(this.src)" title="Sala de espera">
           <img src="../imagenes/quirofano.png" onclick="abririmagen(this.src)" title="Quirófano">
           <img src="../imagenes/personal.png" onclick="abririmagen(this.src)" title="Personal">
           <img src="../imagenes/entradahsopital.png" onclick="abririmagen(this.src)" title="Entrada del hospital">
           <img src="../imagenes/salaoncologia.png" onclick="abririmagen(this.src)" title="Sala Oncología">
           <img src="../imagenes/salacardiologia.png" onclick="abririmagen(this.src)" title="Sala cardiología">
           <img src="../imagenes/parking.png" onclick="abririmagen(this.src)" title="Parking">
        </div>
<?php 
    require("_footer.php");
    require("_contacto-hospital.php");
?>
