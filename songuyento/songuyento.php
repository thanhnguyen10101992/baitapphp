<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
     function ham_kiem_tra_so_nguyen_to($n)  
     {  
      for($x = 2; $x < $n; $x++)  
        {  
           if($n % $x ==0)  
             {  
               return 0;  
             }  
        }  
       return 1;  
     }  

     for($i=2;$i<=100;$i++){
        
        if(ham_kiem_tra_so_nguyen_to($i)==1){
            var_dump($i);
        }
     }
     
    
   


?>
<body>
    
</body>
</html>