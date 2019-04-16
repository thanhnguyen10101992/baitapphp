<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="">
    <script src=""></script>
</head>
<?php
    for( $i=0;$i<7;$i++){
        for($j=0;$j<20;$j++){
            echo '*';
            
        }
        echo '<br>';
    }


    for($i=0;$i<5;$i++){
        for($j=0;$j<$i;$j++){
            echo '*';
        }
        echo '<br>';
    }


    for($i=5;$i>=0;$i--){
        for($j=0;$j<$i;$j++){
            echo '*';
        }
        echo '<br>';
    }

?>    

<body>
    
</body>
</html>