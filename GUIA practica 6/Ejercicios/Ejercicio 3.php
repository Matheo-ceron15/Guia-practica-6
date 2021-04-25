<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h3>Ejercicio 3</h3>
    <p>Determinar el costo y el descuento que tendrá un artículo. Considere que si su
        precio es mayor o igual a $200 se le aplica un descuento de 15%, y si su
        precio es mayor a $100 pero menor a $200, el descuento es de 12%, y si es
        menor a $100, sólo 10%.
    </p>
    <form action="" method="post">
        <label for="costo">Escriba el costo del articulo:</label>
        <input type="text" name="costo" id="costo">
        <input type="submit"  value="Precio final">
    </form>
    <?php
        if (isset ($_POST["costo"])) {
            include("complemento_3.php");
            echo "<h2>El total a pagar es de: ".costoDescueto($_POST["costo"]."</h2>");
        }
    ?>
</body>
</html>