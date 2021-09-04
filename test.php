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

        //   Red_Begin
           private function setRed (string $red){
               $this->red = $red;
               if ($red<0||$red>255){
                   exit('Значение может быть от 0 до 255');
               }
           }
           public function getRed (): int{
               return $this->red;
           }
        //   Red_End

        //Green_Begin
            private function setGreen (int $green){
               $this->green = $green;
                   if ($green<0||$green>255){
                       exit('Значение может быть от 0 до 255');
                   }

            }
            public function getGreen ():int{
               return $this->green;
            }

        //Green_End

        //Blue_Begin
            private function setBlue (int $blue){
                $this->blue = $blue;
                 if ($blue<0||$blue>255){
                      exit('Значение может быть от 0 до 255');
                 }

            }
            public function getBlue ():int{
                  return $this->blue;
            }
        //Blue_End

            public function mix (Color $second): Color {
               return new Color(($this -> getRed() + $second ->getRed())/2,
                                ($this->getGreen() + $second ->getGreen()) /2,
                                ($this ->getBlue() + $second ->getBlue()) /2
               );
            }

    };


$q = new Color('200', '200', '200');
//$w = new Color('100', '100', '100');
$e = $q->mix(new Color('100', '100', '100'));
echo '<pre>';
var_dump($e);
echo '<pre>';
echo $e->getRed();
echo $e->getGreen();
echo $e->getBlue();



?>
