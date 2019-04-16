<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
    class pbac2
    {
      public $a;
      public $b;
      public $c;
    
      public function __construct($a, $b, $c)
      {
          $this->a = $a;
          $this->b = $b;
          $this->c = $c;
      }

      public function getdelta()
      {
        return $this->b * $this->b-4*$this->a*$this->c;
      }
      
      
      public function r1($delta){
        return (-$this->b+sqrt($delta))/(2*$this->a*$this->c);
      }

      public function r2($delta){
        return (-$this->b-sqrt($delta))/(2*$this->a*$this->c);
      }
      //tinh chu vi
    //   public function getPerimeter()
    //   {
    //   return (($this->width + $this->height) * 2);
    //   }
  
    //   public function display()
    //   {
    //   return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    //   }
    }

    $a  = 1;
    $b = -5;
    $c=6;
    // $rectangle = new Rectangle($width, $height);
    $ptb2=new pbac2($a,$b,$c);
    var_dump($ptb2).'<br>';
    echo "delta". $ptb2->getdelta().'<br>';
    var_dump($ptb2->getdelta()).'<br>';
    echo 'r1'. $ptb2->r1( $ptb2->getdelta());
    
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