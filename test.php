<?php
class Color
    {
           private  $red;
           private  $green;
           private  $blue;

           public function __construct ($red, $green, $blue)
           {
                $this ->setRed($red);
                $this ->setGreen($green);
                $this ->setBlue($blue);

           }

//  Red_Begin
           private function setRed (string $red){
               $this->red = $red;
               if ($red<0||$red>255){
                   exit('Значение может быть от 0 до 255');
               }
           }
           public function getRed (): int{
               return $this->red;
           }
//  Red_End

//  Green_Begin
            private function setGreen (int $green){
               $this->green = $green;
                   if ($green<0||$green>255){
                       exit('Значение может быть от 0 до 255');
                   }

            }
            public function getGreen ():int{
               return $this->green;
            }

//  Green_End

//  Blue_Begin
            private function setBlue (int $blue){
                $this->blue = $blue;
                 if ($blue<0||$blue>255){
                      exit('Значение может быть от 0 до 255');
                 }

            }
            public function getBlue ():int{
                  return $this->blue;
            }
//  Blue_End

//  Mix_Function_Begin
            public function mix (Color $second): Color {
               return new Color(($this -> getRed() + $second ->getRed())/2,
                                ($this->getGreen() + $second ->getGreen()) /2,
                                ($this ->getBlue() + $second ->getBlue()) /2
               );
            }
//  Mix_Function_End

            public function equals (Color $second):bool  {
               $r = null;
               $g = null;
               $b = null;
               $result = null;

               if ($this->getRed() == $second->getRed())        {$r = true;} else{$r = false;}
               if ($this->getGreen() == $second->getGreen())    {$g = true;} else{$g = false;}
               if ($this ->getBlue() == $second->getBlue())     {$b = true;} else{$b = false;}

               if ($r == true & $g == true & $b == true)        {$result = true;} else{$result = false;}

               return $result;
            }

    };


$color = new Color(200, 200, 200);
$mixedColor = $color->mix(new Color(100, 100, 100));
echo '<pre>';
echo $mixedColor->getRed(); // 150
echo '<pre>';
echo $mixedColor->getGreen(); // 150
echo '<pre>';
echo $mixedColor->getBlue(); // 150
echo '<pre>';

if (!$color->equals($mixedColor)) {
    echo 'Цвета не равні';
}

?>
