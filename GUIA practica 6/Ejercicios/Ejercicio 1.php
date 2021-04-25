<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h3>Ejercicio 1</h3>
    <p>En un parqueo requieren determinar cuánto deben cobrar por el uso del
        estacionamiento a sus clientes. Las tarifas que se tienen son las siguientes:
        <br>- Las dos primeras horas a $5.00 c/u.
        <br>- Las siguientes tres a $4.00 c/u.
        <br>- Las cinco siguientes a $3.00 c/u.
        <br>- Después de diez horas el costo por cada una es de dos dólares.</p><hr>
            <form action="" method="post">
                <label for="cantidad">Cantidad de horas:</label>
                <input type="text" name="cantidad" id="cantidad"><br>
                <input type="submit" value="cantidad a pagar:"> 
            </form>
        <?php
            if (isset($_POST["cantidad"])) {
                include("complemento_1.php");
                echo "<h1>El total a pagar es de: ".datos($_POST["cantidad"])."</h1>";
                
            }
        ?>  

</body>
</html>