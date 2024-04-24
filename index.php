<?php
    include("calculator.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <p>calculator</p>
    <select name="option">
        <option value="add">addition</option>
        <option value="sub">subtraction</option>
        <option value="div">division</option>
        <option value="mul">multiplication</option>
    </select>
    <input type="number" name="num1" value="input a number">
    <input type="number" name="num2" value="input a number">
    <input type="submit" name="button" value="calculate">
    <?php
        $_POST["button"] = $calculator->__construct($oper, $num1, $num2);
        echo "RESULT: ";
        echo $_POST['button'];
    ?>
    </form>
</body>
</html>