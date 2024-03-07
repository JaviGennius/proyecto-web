<?php
session_start();
require("initdb.php");
//Seleccion del nombre del departamento y su id para generar las páginas de los diferentes departamentos
$consulta = "SELECT Nombre_departamento, ID_departamento FROM departamentos;";
$guardar = $con->query($consulta);
?>

<nav class="navegacion">
    <a href="/back-end/index.php"><img src="../imagenes/hospital 2.png" title="Inicio" class="hospital" /></a>
    <ul class="menu">
        <li><a href="/back-end/index.php">Inicio</a></li>
        <li><a href="#">Departamentos</a>
            <ul class="sumenu">
                <?php
                //Crear cada departamento en base a su id
                while ($row = $guardar->fetch_assoc()) {
                    echo "<li><a href='/back-end/departamentos.php?ID_departamento=" . $row['ID_departamento'] . "'>" . $row['Nombre_departamento'] . "</a></li>";
                }
                ?>
            </ul>
        </li>
        <li><a href="#">Información</a>
            <ul class="sumenu">
                <li><a href="/back-end/calculadora.php">Calculadora</a></li>
                <li><a href="/back-end/horarios.php">Horarios y Ubicación</a></li>
                <li><a href="/back-end/imagenescentro.php">Imágenes del Centro</a></li>
            </ul>
        </li>
        <?php 
            if ($_SESSION['dni_usuario']) {
                echo '<li><a href="/back-end/portal_paciente.php">Portal del Paciente</a></li>';
            } else {
                echo '<li><a href="/back-end/inicio_sesion.php">Portal del Paciente</a></li>';
            }
        ?>
        <?php
        //Destruir a una sesión en PHP (Stack overflow): https://es.stackoverflow.com/questions/63965/como-destruir-una-session-iniciada-en-php
        //Verificamos si se ha iniciado sesión
        if ($_SESSION['dni_usuario']) {
            //Crea un formulario para que en caso de que se pulse el botón se elimine la sesión
            echo '<li><a href="#">
                        <form method="post" action="">
                            <button type="submit" name="logout">Cerrar Sesión</button>
                        </form>
                    </a></li>';
            //Cerrar sesión al darle al botón (Youtube): https://www.youtube.com/watch?time_continue=698&v=IAL6Nq6FW0s&embeds_referring_euri=https%3A%2F%2Fwww.bing.com%2F&embeds_referring_origin=https%3A%2F%2Fwww.bing.com&source_ve_path=Mjg2NjY&feature=emb_logo
            if (isset($_POST['logout'])) {
                session_destroy();
                header("Location: inicio_sesion.php");
                exit();
            }
        }
        ?>
    </ul>
    <a href="/back-end/formulario_final.php"><img src="../imagenes/boton_registro.png" class="boton_registro" /></a>
</nav>
