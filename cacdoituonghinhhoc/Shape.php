<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
    class Shape{
        public $name;
    
        public function __construct($name)
        {
            $this->name = $name;
        }
    
        public function show(){
            return "I am a shape. My name is $this->name";
        }
    }

?>
<body>
    
</body>
</html>