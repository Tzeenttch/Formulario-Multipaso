<?php

session_start();

if (isset($_POST['reiniciar']) || isset($_POST['anterior'])) { //Boton de reinicio
    session_destroy();
    header("Location: index.php");
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('app/vars.php');
include_once('app/functions.php');
include_once('templates/template1.php');


$_SESSION['musculos'] = $_POST['musculos'];
$_SESSION['rendimiento'] = $_POST['rendimiento'];
$_SESSION['sexo'] = $_POST['sexo'];
$muculoAEntrenar = $_SESSION['musculos'];
$rendimiento = $_SESSION['rendimiento'];


if (!empty($muculoAEntrenar)) {
    header('Location: templates/templatePlanMejora.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['datosUsuario'])) {

    $_SESSION['planEntrenamieto'] = $_POST['planPecho'];
    $planEscogido = $_SESSION['planEntrenamieto'];
}
