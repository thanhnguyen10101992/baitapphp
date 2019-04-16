<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
    var_dump($_POST);

?>
<body>
    <h2>Máy Tính</h2>
    <form method="post">
        <input type="number" name="x" placeholder=""/>
        <input type="number" name="y" placeholder=""/>
        <select name="pheptinh">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">:</option>
        </select>
        <input type = "submit" id = "submit" value = "Tìm"/>
    </form>
</body>
</html>