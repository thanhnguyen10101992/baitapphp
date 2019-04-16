<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
    class Person{
        // thuộc tính của lớp là một tùy chọn có thể không cần khai báo 
        // – tuy nhiên nếu khai báo tường minh thì điều đó rất tốt
        var $name;           
        function __construct($Persons_name) {
            $this->name = $Persons_name;
        }
   
        public function get_name() {
            return $this->name;                                 
        }     
                
        // các phương thức và thuộc tính khi được khai báo là protected và protected                               
        // nhằm hạn chế truy xuất                                 
        protected function set_name($new_name) {                                                
            if ($this->name !=  "Jimmy Two Guns") 
            {                                                              
               $this->name = strtoupper($new_name);                                             
            }                                
        }                
   }        
           
   // từ khóa extends được sử dụng khi khai báo kế thừa
   class Employee extends Person                
   {                                
         protected function set_name($new_name) {                                
             if ($new_name ==  "Stefan Sucks") {                                               
                $this->name = $new_name;                                
             }                               
             else if ($new_name ==  "Johnny Fingers") {              
                Person::set_name($new_name);                                
             }                
         }  
                 
         function __construct($Employee_name)                
         {                                
              $this->set_name($Employee_name);                
         } 
   }


?>
<body>
    
</body>
</html>