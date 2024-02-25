<?php
    $titulo = "Página Inicio";
?>
<?php require("_header-index.php");?>    
            <section class="articulo">
                <img src="../imagenes/hospitalart.jpeg" class="hospitalart">
                <div class="parrafo+h3">
                    <h1>Excelencía en el servicio: El Hospital Felipe VI como referente: </h1>
                    <p>"El Hospital Felipe VI se erige como un modelo de atención médica de primer nivel. Su compromiso con la excelencia en el servicio se refleja en cada interacción con los pacientes. Desde el personal administrativo hasta los médicos y enfermeras, todos trabajan con dedicación y empatía para brindar una experiencia positiva y tranquilizadora. Las instalaciones modernas y equipadas con tecnología de vanguardia complementan este enfoque centrado en el paciente. En el Hospital Felipe VI, la calidad y el cuidado van de la mano, estableciendo así un estándar ejemplar en el campo de la salud..."</p>
            <hr> 
            </div> 
            </section>
            <section class="noticias">
                        <a href="https://www.oncohealth.eu/"><img src="../imagenes/logo_oncosalud.png" class="enlaces" onmouseover="distorsion(this)" onmouseout="distorsion2()"/></a>
                        <a href="html/formulario2.html"><img src="../imagenes/portalPaciente.png" class="enlaces" onmouseover="distorsion(this)" onmouseout="distorsion2()"/></a>
                        <a href="https://www.comunidad.madrid/servicios/salud"><img src="../imagenes/fotomadrid.png" class="enlaces" onmouseover="distorsion(this)" onmouseout="distorsion2()"/></a>
                        <a href="https://www.comunidad.madrid/servicios/salud/mi-carpeta-salud"><img src="../imagenes/salud_madrid.png" class="enlaces" onmouseover="distorsion(this)" onmouseout="distorsion2()"/></a>
            </section>
            <section class="noticias2">
                <div class="noticias21">
                <img src="../imagenes/noticias1.jpg">
                <div class="noticias211">
                    <h2>Importante Avance en el Hospital Felipe VI: Inauguración de una Unidad de Investigación de Vanguardia</h2>
                    <h3>Fecha: 27 de enero de 2024</h3>
                    <div class="texto">
                    <p class="p1">En un emocionante hito para la salud y el bienestar de nuestra comunidad, el Hospital Felipe VI celebró la inauguración de su nueva Unidad de Investigación Médica, consolidándose como líder en innovación y excelencia en el ámbito hospitalario.
                    La Unidad de Investigación, equipada con tecnología de última generación y personal altamente capacitado, tiene como objetivo impulsar descubrimientos médicos, promover ensayos clínicos y fomentar la colaboración entre profesionales de la salud para mejorar aún más la calidad de atención que brinda el hospital.
                    <br><br>El Dr. Javier Martínez, director médico del Hospital Felipe VI, expresó su entusiasmo durante la ceremonia de inauguración: "Esta nueva Unidad de Investigación marca un paso significativo hacia adelante en nuestro compromiso con la salud y el avance científico. Estamos emocionados por las posibilidades que se abren para mejorar los tratamientos y cuidados médicos para nuestros pacientes".
                    <br><br>La unidad se centrará en áreas clave como la investigación oncológica, enfermedades cardiovasculares y neurociencias, entre otros campos, con el objetivo de avanzar en la comprensión y el tratamiento de diversas condiciones médicas.</p>
                    <p class="p2">La comunidad médica local, así como representantes gubernamentales y líderes comunitarios, se unieron para celebrar este logro trascendental para el Hospital Felipe VI. La inversión en investigación médica refleja el compromiso continuo del hospital para ofrecer servicios de salud de calidad y mantenerse a la vanguardia de los avances médicos.
                    <br><br>La Unidad de Investigación ya ha iniciado colaboraciones con destacados institutos de investigación y universidades, estableciendo un ambiente propicio para el intercambio de conocimientos y la búsqueda conjunta de soluciones para los desafíos de salud actuales y futuros.    
                    <br><br>Con este nuevo capítulo en su historia, el Hospital Felipe VI refuerza su posición como un referente en el cuidado de la salud y demuestra su dedicación a proporcionar a la comunidad servicios médicos de última generación.</p>
                    </div>
                    </div>    
                    </div>
            </section>
<?php 
session_start();
    if($_SESSION['dni_usuario']){
        require_once("_footer-cerrar.php");
    }else {
            require("_footer.php");
    }
    require("_contacto-hospital.php");
?>
</body>
</html>