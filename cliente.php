<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora2</title>
</head>
<body>
<CENTER>       
<h1 id="titulo">Calculadora</h1>
<form class="calculadora" action="cliente.php" method="get">
    Numero 1: <input type="number" name="a" required><br>
    Numero 2: <input type="number" name="b" required><br>
    Operacion: <select name="action">
        <option value="suma">Sumar</option>
        <option value="resta">Restar</option>
        <option value="multiplicacion">Multiplicar</option>
        <option value="division">Dividir</option>

    </select><br><br>
    <input id="btn-calcular" type="submit" value="Calcular">
</form>

<?php //OPERACION SUMA
    if(isset($_GET["action"]) && $_GET["action"] == "suma"){
        $calculadora= file_get_contents("http://localhost/Calculadora2/servicio.php?action=suma&a=". $_GET["a"]."&b=".$_GET["b"]);
        $calculadora = json_decode($calculadora, true);
        ?>
        <div class="resultado">
        <h1>SUMA</h1>
        <table>
            <tr>
                <td>Primer numero:</td><td><?php echo $calculadora["a"] ?></td>
            </tr>
            <tr>
                <td>Segundo numero:</td><td><?php echo $calculadora["b"] ?></td>
            </tr>
            <tr>
                <td>Total: </td><td> <h3><?php echo $calculadora["total"] ?></h3></td>
            </tr>
        </table>
        </div>
    <?php
    }
    #Operacion resta
    if(isset($_GET["action"]) && $_GET["action"] == "resta"){
        $calculadora= file_get_contents("http://localhost/Calculadora2/servicio.php?action=resta&a=". $_GET["a"]."&b=".$_GET["b"]);
        $calculadora = json_decode($calculadora, true);
        ?>
        <div class="resultado">
        <h1>RESTA</h1>
        <table>
            <tr>
                <td>Primer numero:</td><td><?php echo $calculadora["a"] ?></td>
            </tr>
            <tr>
                <td>Segundo numero:</td><td><?php echo $calculadora["b"] ?></td>
            </tr>
            <tr>
                <td>Total: </td><td> <h3><?php echo $calculadora["total"] ?></h3></td>
            </tr>
        </table>
        </div>
    <?php
    }
    if(isset($_GET["action"]) && $_GET["action"] == "multiplicacion"){
        $calculadora= file_get_contents("http://localhost/Calculadora2/servicio.php?action=multiplicacion&a=". $_GET["a"]."&b=".$_GET["b"]);
        $calculadora = json_decode($calculadora, true);
        ?>
        <div class="resultado">
        <h1>MULTIPLICACION</h1>
        <table>
            <tr>
                <td>Primer numero:</td><td><?php echo $calculadora["a"] ?></td>
            </tr>
            <tr>
                <td>Segundo numero:</td><td><?php echo $calculadora["b"] ?></td>
            </tr>
            <tr>
                <td>Total: </td><td> <h3><?php echo $calculadora["total"] ?></h3></td>
            </tr>
        </table>
        </div>
    <?php
    }

        #Operacion division
        if(isset($_GET["action"]) && $_GET["action"] == "division"){
            $calculadora= file_get_contents("http://localhost/Calculadora2/servicio.php?action=division&a=". $_GET["a"]."&b=".$_GET["b"]);
            $calculadora = json_decode($calculadora, true);
            ?>
            <div class="resultado">
            <h1>DIVISION</h1>
            <table>
                <tr>
                    <td>Primer numero:</td><td><?php echo $calculadora["a"] ?></td>
                </tr>
                <tr>
                    <td>Segundo numero:</td><td><?php echo $calculadora["b"] ?></td>
                </tr>
                <tr>
                    <td>Total: </td><td> <h3><?php echo $calculadora["total"] ?></h3></td>
                </tr>
            </table>
            </div>
        <?php
        }
?>
</CENTER>
</body>
</html>
