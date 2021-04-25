<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 3</title>
</head>
<body>
    <h2>Ejemplo 3</h2>
    <h3>Utilizando funciones, se desea determinar si una persona puede votar con base en su
        edad en las próximas elecciones.</h3>
            <h3>Ingrese la edad de la persona</h3>
        <form action="ejemplo 3.php" method="post">
            <label for="edad">Edad: </label>
            <input type="text" name="edad" id="edad">
            <hr>
            <input type="submit" value="Calcular">
        </form>
        <?php
            //si $_POST["edad"] tiene valor se enviaron los datos
        if (isset($_POST["edad"])) {
            //crear la función
            function votar($_edad){
                # validar la edad
                if ($_edad >= 18) {
                    # puede votar
                    $resultado = "Con $_edad años de edad, puede votar.";
                
                } else {
                    # no puede votar
                    $resultado = "Con $_edad años de edad, NO puede votar.";
                }
                    return $resultado;
            }
            // usar la función
            echo "<h1>".votar($_POST["edad"])."</h1>";
        }
    
        ?>
</body>
</html>