<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form action="Calculator.php" method="GET">
    <input type="number" name="x" placeholder="First number" required><br>
    <input type="number" name="y" placeholder="Second number" required><br>
    <input type="number" name="z" placeholder="Third number" required><br>
    <button>calculate</button>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/5/19
 * Time: 6:26 AM
 */
    if (isset($_GET['z'])){
        $num1 = $_GET['x'];
        $num2 = $_GET['y'];
        $num3 = $_GET['z'];
        $jibu = ($num1+$num2)**2/$num3;
        echo "Results = ".$jibu;

    }


?>
</body>
</html>