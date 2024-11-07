<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css"> <!--Estilo externo -->
    <title>paso 1</title>
</head>

<body>

    <h2>Musculos a mejorar</h2>

    <form action="index.php" method="POST">
        <label for="musculos">Selecciona una acción:</label>
        <select id="musculos" name="musculos" required>
            <option value="pectorales">Pectorales</option>
            <option value="biceps">Biceps</option>
            <option value="gluteos">Gluteos</option>
        </select>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
        </select>

        <label for="rendimiento">Introduce tu rendimiento acutal (peso/repeticiones): </label>
        <input type="text" id="rendimiento" name="rendimiento" required>
        <br><br>
        <input type="submit" value="Siguiente">
    </form>

    <form action="index.php" method="POST">
        <input type="submit" name="reiniciar", value="Reiniciar">
    </form>


</body>

</html>