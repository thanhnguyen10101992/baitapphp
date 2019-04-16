<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tong=0;
        var_dump($_POST);
        $amout=(integer)$_POST['amount'];  
        $rate=(integer)$_POST['rate'];
        $years=(integer)$_POST['years'];
        $tong=$amout+$tong*$rate;
       
    }   

?>
<body>
    <h1>Future Value Calculator</h1>
    <form method="post">
    Investment Amount:<input type="number" name="amount" placeholder="0"/><br>
    Yearly Interest Rate:<input type="number" name="rate" placeholder="0"/><br>
    Number of Years:<input type="number" name="years" placeholder="0"/><br>
    <input type = "submit" id = "submit" value = "Tính"/>
    </form>
</body>
</html>