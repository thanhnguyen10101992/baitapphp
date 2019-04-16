<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
    class fan
    {
      private $slow;
      private $medium;
      private $fast;
    
      public function __construct($slow, $medium, $fast)
      {
          $this->slow = $slow;
          $this->medium = $medium;
          $this->fast=$fast;
      }

      private function isON($trangthai)
      {
        $this->trangthai=false;
      }

      private function speed($tocdo){
          $this->tocdo='slow';
      }

      private function bankinh($bankinh){
          $this->bankinh=5;
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

    // $width  = 10;
    // $height = 20;
    // $rectangle = new Rectangle($width, $height);
    

    // echo $rectangle->width.'<br>'; // 0utput: 10
    // echo $rectangle->height.'<br>';// 0utput: 20
    // $rectangle->height = 30 .'<br>';
    // $rectangle->width = 20 .'<br>';
    // echo $rectangle->height.'<br>'; // 0utput: 30
    // echo $rectangle->width.'<br>';;// 0utput: 20
    // echo ("chu vi".'  '. $rectangle->getPerimeter()).'<br>'; // 0utput: 100
    // echo $rectangle->getArea().'<br>'; // Output: 600
    // echo ("Your Rectangle". $rectangle->display()).'<br>';



?>
<body>
    
</body>
</html>