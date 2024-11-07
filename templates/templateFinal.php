<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css"> <!--Estilo externo -->
    <title>paso 4</title>
</head>

<body>

    <?php 
        include_once('../app/vars.php');
        include_once('../app/functions.php');
       print_r($bodyOutput = generateProfile());  
    ?>

</body>

</html>