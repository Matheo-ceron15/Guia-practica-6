<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 4</title>
</head>
<body>
    <h3>Utilizando funciones, se desea determinar si una persona puede votar con base en su
        edad en las próximas elecciones. Cree un archivo para las funciones y otro para
        utilizarlas y resolver el problema.
    </h3>

    <?php
        //crear la función votar()
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
    ?>

</body>
</html>