<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css"> <!--Estilo externo -->
    <title>Paso 2</title>
</head>

<body>
    <?php
    session_start();
    include_once('../app/vars.php');
    include_once('../app/functions.php');

    $rendimiento = $_SESSION['rendimiento'];
    $muculoAEntrenar = $_SESSION['musculos'];
    switch ($muculoAEntrenar) {

        case 'pectorales':
            print_r($bodyOutput = planesDePecho($rendimiento, $muculoAEntrenar));
            break;

        case 'biceps':
            print_r($bodyOutput = planesDeBiceps($rendimiento, $muculoAEntrenar));
            break;

        case 'gluteos':
            print_r($bodyOutput = planesDeGluteos($rendimiento, $muculoAEntrenar));
            break;
    }
    ?>
</body>

</html>