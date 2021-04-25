<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1- pratica 6</title>
</head>
<body>
<h2>Ejemplo 1</h3>
    <h4>Se requiere una función que pida como parámetro un nombre y haga una impresión,
        donde se muestre un saludo que incluya el nombre asignado en el parámetro de la
        función.
</h4>

    <?php 
        function saludar ($nombre)
        {
            $saludo = "te deseamos un excelente dia $nombre";
            return $saludo;
        }
        echo saludar("Esmeralda");
    ?>
</body>
</html>