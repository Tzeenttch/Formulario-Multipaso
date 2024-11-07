<?php

function planesDePecho($rendimiento, $musculo)
{

    $capacidad = explode("/", $rendimiento)[0];

    $output = '
    
        <h1>Planes de mejora de' . $musculo . '</h1>
        <br>

        <h3>Para mejorar tu entrenamiento de' . $musculo . 'te recomendamos el siguiente entrenamiento: </h3>
        <form action="templatePasoFinal.php" method="POST">
            <label for="planEntrenamiento">Selecciona un plan:</label>
            ';

    if ($capacidad >= 80) {
        $output .= '
                    <ul id="planPecho">
                        <li>
                            <input type="radio" id="planPecho1" name="plan" value="Plan Avanzado" required>
                            <label for="planPecho1">Plan Avanzado</label>
                            <ul>Press mancuernas inclinado 2/10-8 + 1/10-8(bajando peso) y hasta el fallo</ul>
                            <ul>Press mancuernas plano 2/10-8 + 1/6-8 (bajando peso) y hasta el fallo</ul>
                            <ul>Aperturas en polea alta 2/10 + 1 dropset final</ul>
                            <ul>Aperturas 3/10(llegar al fallo en la 10)</ul>
                        </li>
                    </ul>';
    } elseif ($capacidad < 80 && $capacidad > 50) {
        $output .= '
                    <ul id="planPecho">
                        <li>
                            <input type="radio" id="plan1" name="plan" value="Plan Intermedio">
                            <label for="plan">Plan Intermedio</label>
                            <ul>Press multipower inclinado 3/8-10</ul>
                            <ul>Press plano multipower 2/6-8 repes + 1/8-10(bajando peso) y luego al fallo</ul>
                            <ul>Cruce de poleas inferior 4/10</ul>
                            <ul>Aperturas en maquina 3/10</ul>
                        </li>
                    </ul>';
    } elseif ($capacidad <= 50) {
        $output .= '
                    <ul id="planPecho">
                        <li>
                            <input type="radio" id="planPecho3" name="plan" value="Plan Iniciado">
                            <label for="planPecho3">Plan Iniciado</label>
                            <ul>Press mancuernas 3/10</ul>
                            <ul>Press mancuernas inclinado 3/8(pesado)</ul>
                            <ul>Aperturas inferior 4/10</ul>
                            <ul>Aperturas 3/10</ul>
                        </li>
                    </ul>';
    }

    $output .= '
            <button type="submit">Siguiente</button>
        </form>

        <form action="../index.php" method="POST">
            <input type="submit" name="anterior" value="Anterior">
        </form>

        <form action="../index.php" method="POST">
            <input type="submit" name="reiniciar" value="Reiniciar">
        </form>

    ';

    return $output;
}



function planesDeGluteos($rendimiento, $musculo)
{
    $capacidad = explode("/", $rendimiento)[0];

    $output = '
        <h1>Planes de mejora de ' . $musculo . '</h1>
        <br>
        <h3>Para mejorar tu entrenamiento de ' . $musculo . ' te recomendamos el siguiente entrenamiento: </h3>
        <form action="templatePasoFinal.php" method="POST">
            <label for="planEntrenamiento">Selecciona un plan:</label>
            ';

    if ($capacidad >= 100) {
        $output .= '
                    <ul id="planGluteos">
                        <li>
                            <input type="radio" id="planGluteos1" name="plan" value="Plan Avanzado" required>
                            <label for="planGluteos1">Plan Avanzado</label>
                            <ul>Sentadillas con barra 4/8-10 + 1/6-8 (bajando peso) y hasta el fallo</ul>
                            <ul>Hip thrust 3/8-10 + 1/6 (bajando peso) y hasta el fallo</ul>
                            <ul>Prensa de pierna 4/10</ul>
                            <ul>Elevación de cadera en banco 3/12</ul>
                            <ul>Extensiones de cadera 3/12-15</ul>
                        </li>
                    </ul>';
    } elseif ($capacidad < 100 && $capacidad > 70) {
        $output .= '
                    <ul id="planGluteos">
                        <li>
                            <input type="radio" id="planGluteos2" name="plan" value="Plan Intermedio">
                            <label for="planGluteos2">Plan Intermedio</label>
                            <ul>Sentadillas con barra 3/8-10</ul>
                            <ul>Hip thrust 3/10</ul>
                            <ul>Prensa de pierna 3/10</ul>
                            <ul>Elevación de cadera en banco 3/12</ul>
                            <ul>Extensiones de cadera 3/12</ul>
                        </li>
                    </ul>';
    } elseif ($capacidad <= 70) {
        $output .= '
                    <ul id="planGluteos">
                        <li>
                            <input type="radio" id="planGluteos3" name="plan" value="Plan Iniciado">
                            <label for="planGluteos3">Plan Iniciado</label>
                            <ul>Sentadillas con barra 3/12</ul>
                            <ul>Hip thrust 3/12</ul>
                            <ul>Prensa de pierna 3/12</ul>
                            <ul>Elevación de cadera 3/12</ul>
                        </li>
                    </ul>';
    }

    $output .= '
            <button type="submit">Siguiente</button>
        </form>

                <form action="../index.php" method="POST">
            <input type="submit" name="anterior" value="Anterior">
        </form>

        <form action="../index.php" method="POST">
            <input type="submit" name="reiniciar" value="Reiniciar">
        </form>
    ';

    return $output;
}



function planesDeBiceps($rendimiento, $musculo)
{
    $capacidad = explode("/", $rendimiento)[0];

    $output = '
        <h1>Planes de mejora de ' . $musculo . '</h1>
        <br>
        <h3>Para mejorar tu entrenamiento de ' . $musculo . ' te recomendamos el siguiente entrenamiento: </h3>
        <form action="templatePasoFinal.php" method="POST">
            <label for="planEntrenamiento">Selecciona un plan:</label>
            ';

    if ($capacidad >= 40) {
        $output .= '
                    <ul id="planBiceps">
                        <li>
                            <input type="radio" id="planBiceps1" name="plan" value="Plan Avanzado" required>
                            <label for="planBiceps1">Plan Avanzado</label>
                            <ul>Curl con barra 4/8-10 + 1/6-8 (bajando peso) y hasta el fallo</ul>
                            <ul>Curl alterno con mancuernas 3/8-10 + 1/6-8 (bajando peso) y hasta el fallo</ul>
                            <ul>Curl concentrado 3/10</ul>
                            <ul>Curl en banco inclinado 3/12</ul>
                            <ul>Curl martillo 3/12</ul>
                        </li>
                    </ul>';
    } elseif ($capacidad < 40 && $capacidad > 25) {
        $output .= '
                    <ul id="planBiceps">
                        <li>
                            <input type="radio" id="planBiceps2" name="plan" value="Plan Intermedio">
                            <label for="planBiceps2">Plan Intermedio</label>
                            <ul>Curl con barra 3/8-10</ul>
                            <ul>Curl alterno con mancuernas 3/8-10</ul>
                            <ul>Curl concentrado 3/10</ul>
                            <ul>Curl en banco inclinado 3/12</ul>
                        </li>
                    </ul>';
    } elseif ($capacidad <= 25) {
        $output .= '
                    <ul id="planBiceps">
                        <li>
                            <input type="radio" id="planBiceps3" name="plan" value="Plan Iniciado">
                            <label for="planBiceps3">Plan Iniciado</label>
                            <ul>Curl con barra 3/12</ul>
                            <ul>Curl alterno con mancuernas 3/12</ul>
                            <ul>Curl concentrado 3/12</ul>
                        </li>
                    </ul>';
    }
    $output .= '
            <button type="submit">Siguiente</button>
        </form>

        <form action="../index.php" method="POST">
            <input type="submit" name="anterior" value="Anterior">
        </form>

        <form action="../index.php" method="POST">
            <input type="submit" name="reiniciar" value="Reiniciar">
        </form>
    ';

    return $output;
}

function generateProfile() //TODO: Hacer imagenes unicas y refactorizar el codigo
{
    session_start();

    //Manejo de la imagen


    $destino = '../uploads/'; //Ruta de destino de la img
    $imgName = basename($_FILES['imagenUsuario']['name']); //establece un nombre de la img
    $rutaDestino = $destino . $imgName; //Concatena las variables anteriores para obtener la ruta donde almacenarla.


    if (move_uploaded_file($_FILES['imagenUsuario']['tmp_name'], $rutaDestino)) {
        $_SESSION['imagen'] = $rutaDestino;
    }

    $_SESSION['nombre'] = $_POST['nombreUsuario'];
    $_SESSION['email'] = $_POST['emailUsuario'];
    $_SESSION['imagen'] = $_POST['imagenUsuario'];



    $nombre = $_SESSION['nombre'];
    $genero = $_SESSION['sexo'];
    $musculo = $_SESSION['musculos'];
    $imagen = $_SESSION['imagen'];
    $planMejora = $_SESSION['planEntrenamiento'];


    $output = '<table border="1" cellpadding="5" cellspacing="0">';
    $output .= '<tr>';
    $output .= '<th>Nombre</th>';
    $output .= '<th>Género</th>';
    $output .= '<th>Músculo</th>';
    $output .= '<th>Imagen</th>';
    $output .= '<th>Plan de Entrenamiento</th>';
    $output .= '</tr>';

    $output .= '<tr>';
    $output .= '<td>' . $nombre . '</td>';
    $output .= '<td>' . $genero . '</td>';
    $output .= '<td>' . $musculo . '</td>';
    $output .= '<td><img src="' . $rutaDestino . '" alt="Imagen de usuario" style="width:100px;height:auto;"></td>';
    $output .= '<td>' . $planMejora . '</td>';
    $output .= '</tr>';

    $output .= '</table>';

    $output .= '<br>';

    $output .= '    

        <form action="../index.php" method="POST">
            <input type="submit" name="anterior" value="Anterior">
        </form>

    <form action="../index.php" method="POST">
        <input type="submit" name="reiniciar", value="Reiniciar">
    </form>';

    return $output;
}
