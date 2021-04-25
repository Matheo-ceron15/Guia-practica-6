<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicion 4</title>
</head>
<body>
    <h3>Ejercicio 4:</h3><hr>
    <p>Una importante institución educativa ha decidido estimular a todos sus
        estudiantes mediante la asignación de becas mensuales, para esto se tomarán
        en consideración los siguientes criterios: Para alumnos mayores de 18 años
        con promedio mayor o igual a 9, la beca será de $2000.00; con promedio
        mayor o igual a 7.5, de $1000.00; para los promedios menores de 7.5 pero
        mayores o iguales a 6.0, de $500.00; a los demás se les enviará una carta de
        invitación incitándolos a que estudien más en el próximo ciclo escolar.
        A los alumnos de 18 años o menores de esta edad, con promedios mayores o
        iguales a 9, se les dará $3000; con promedios menores a 9 pero mayores o
        iguales a 8, $2000; para los alumnos con promedios menores a 8 pero
        mayores o iguales a 6, se les dará $100, y a los alumnos que tengan
        promedios menores a 6 se les enviará carta de invitación.
    </p>
    <hr>
        <form action ="" method="POST">
            <label>Edad del estudiante:<br>
            <input type="number" min="5" max="40" name="edad" />
            </label>
            <br>
            <label>Promedio del estudiante:<br>
            <input type="number" min="0" max="10" name="promedio" />
            </label>
            <br>
            <input type="submit" value="Aplicar" />
        </form>
    <?php
        if (isset($_POST["edad"])) {
            $edad = $_POST["edad"];
            $promedio =$_POST["promedio"];
            include("complemento_4.php");
            echo ("<h3>la beca del estudiante es: " .calcularBeca($_POST["edad"]."</h3>"));
        }
    ?>
</body>
</html>