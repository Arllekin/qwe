<?php
declare(strict_types=1);
class Color
{
    private  int $red;
    private  int $green;
    private  int $blue;

    public function __construct ($red, $green, $blue)
    {
        $this ->setRed($red);
        $this ->setGreen($green);
        $this ->setBlue($blue);

    }

//  Red_Begin
    private function setRed (int $red){
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
        return new Color(intdiv($this -> getRed() + $second ->getRed(),2),
            intdiv($this->getGreen() + $second ->getGreen(),2),
            intdiv($this ->getBlue() + $second ->getBlue(),2)
        );
    }
//  Mix_Function_End

//  Equals_Function_Begin
    public function equals (Color $second):bool  {

        return $this->getRed() == $second->getRed() &&
            $this->getGreen() == $second->getGreen() &&
            $this ->getBlue() == $second->getBlue();
    }
//  Equals_Function_End

//  Random_Function_Start
    public static function random (): Color {
        return new Color( rand(0, 255),
            rand(0,255),
            rand(0, 255)
        );
    }


//  Random_Function_End


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
$qaz = Color::random();
var_dump($qaz);
?>
