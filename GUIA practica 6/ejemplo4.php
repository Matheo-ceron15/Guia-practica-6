<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 4</title>
</head>
<body>
    <h2>Utilizando funciones, se desea determinar si una persona puede
    votar con base en su edad en las próximas elecciones.</h2>
    <hr>
    <h3>Ingrese la edad de la persona</h3>
        <form action="ejemplo4.php" method="post">
            <label for="edad">Edad: </label>
            <input type="text" name="edad" id="edad">
            <hr>
            <input type="submit" value="Calcular">
        </form>
        <?php
            //si $_POST["edad"] tiene valor se enviaron los datos
            if (isset($_POST["edad"])) {
                //incluir en este archivo el archivo de las funciones
                include("ejemplo 4.php"); // escribe la ruta exacta del archivo
                // usar la función
                echo "<h1>".votar($_POST["edad"])."</h1>";
        }
        ?>
</body>
</html>