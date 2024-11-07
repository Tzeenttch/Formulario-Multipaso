<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css"> <!--Estilo externo -->
    <title>Paso 3</title>
</head>

<body>

<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $_SESSION['planEntrenamiento'] = $_POST['plan'];
}

?>

    <h1>Introduce tus datos</h1>

    <form action="templateFinal.php" method="post" enctype="multipart/form-data">
        <label for="datosUsuario">Introduce tus datos:</label>
        <br>
            <label for="nombreUsuario" >Nombre:</label>
            <input type="text" id="nombreUsuario" name="nombreUsuario" required>

            <label for="emailUsuario" >Email:</label>
            <input type="email" id="emailUsuario" name="emailUsuario" required>
        
            <label for="imagenUsuario">Sube una imagen para tu perfil:</label>
            <input type="file" id="imagenUsuario" name="imagenUsuario" accept=".jpg, .jpeg, .png" required>
        <br>
        <button type="submit">Siguiente</button>
    </form>

    <form action="templatePlanMejora.php" method="POST">
            <input type="submit" name="anteior" value="Anteior">
        </form>

    <form action="../index.php" method="POST">
        <input type="submit" name="reiniciar" value="Reiniciar">
    </form>

</body>
</html>