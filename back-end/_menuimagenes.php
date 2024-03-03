<?php
session_start();
require("initdb.php");

$consulta = "SELECT Nombre_departamento, ID_departamento FROM departamentos;";
$guardar = $con->query($consulta);
?>
 <div class="navegador">
            <a href="/back-end/index.php"><img src="../imagenes/hospital 2.png" title="Inicio" class="hospital" draggable="false" /></a>
            <div class="menuToggle"></div>
            <nav>
                <ul>
                    <li><a href="/back-end/index.php">Inicio</a></li>
                    <li><a href="#">Departamentos</a>
                    <ul class="sumenu">
                    <?php
                        while ($row = $guardar->fetch_assoc()) {
                            echo "<li><a href='/back-end/departamentos.php?ID_departamento=" . $row['ID_departamento'] . "'>" . $row['Nombre_departamento'] . "</a></li>";
                        }
                    ?>
                    </ul>
                    </li>
                    <li><a href="#">Información</a>
                    <ul>
                        <li><a href="/back-end/calculadora.php">Calculadora</a></li>
                        <li><a href="/back-end/horarios.php">Horarios y Ubicación</a></li>
                        <li><a href="/back-end/imagenescentro.php">Imagenes del centro</a></li>
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
                        if ($_SESSION['dni_usuario']) {
                            echo '<li><a href="#">
                                <form method="post" action="">
                                    <button type="submit" name="logout">Cerrar Sesión</button>
                                </form>
                            </a></li>';
                            if (isset($_POST['logout'])) {
                                session_destroy();
                                header("Location: inicio_sesion.php");
                                exit();
                            }
                        }
                    ?>
                </ul>
            </nav>
            <a href="/back-end/formulario_final.php"><img src="../imagenes/boton_registro.png" class="boton_registro" draggable="false"/></a>
        </div><br><br><br><br>
