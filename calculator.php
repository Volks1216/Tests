<?php
    include("data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

            $oper = $_POST["option"];
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

        $calculator = new data($oper, $num1, $num2);
        
    ?>
</body>
</html>