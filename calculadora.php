<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora fullstack </h1>

    <form action="calculadora.php" method="post">
        <label>Numero 1</label>
        <input type="text" name="numero1" id="numero1">
        <label>Numero 2</label>
        <input type="text" name="numero2" id="numero2">
        <input type="submit" value="calcular">

    </form>
    <hr/>
    <p>Resultado da opereção</p>
    <?php
        if(empy($_POST["numero1"]))
    ?>
</body>
</html>