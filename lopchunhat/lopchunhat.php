<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
    class Rectangle
    {
      public $width;
      public $height;
    
      public function __construct($width, $height)
      {
          $this->width = $width;
          $this->height = $height;
      }

      public function getArea()
      {
      return $this->width * $this->height;
      }
  
      //tinh chu vi
      public function getPerimeter()
      {
      return (($this->width + $this->height) * 2);
      }
  
      public function display()
      {
      return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
      }
    }

    $width  = 10;
    $height = 20;
    $rectangle = new Rectangle($width, $height);
    

    echo $rectangle->width.'<br>'; // 0utput: 10
    echo $rectangle->height.'<br>';// 0utput: 20
    $rectangle->height = 30 .'<br>';
    $rectangle->width = 20 .'<br>';
    echo $rectangle->height.'<br>'; // 0utput: 30
    echo $rectangle->width.'<br>';;// 0utput: 20
    echo ("chu vi".'  '. $rectangle->getPerimeter()).'<br>'; // 0utput: 100
    echo $rectangle->getArea().'<br>'; // Output: 600
    echo ("Your Rectangle". $rectangle->display()).'<br>';



?>
<body>
    
</body>
</html>