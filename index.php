<?php
class User
{
   private string $name;
   private string $email;
   private int $age;
   public function __construct($name, $email, $age)
   {
        $this ->setName($name);

        $this ->setEmail($email);

        $this ->setAge($age);
   }

   public function setName (string $name){
       $this -> name = $name;
   }
   public function getName (): string{
       return $this ->name;
   }

   public function setEmail (string $email){
       $this ->email = $email;
       if (!filter_var("$email", FILTER_VALIDATE_EMAIL)){
           exit('Разуй глаза');
       }
   }
   public function getEmail (): string{
       return $this -> email;
   }

   public function setAge (int $age){
       $this ->age = $age;
       if($age < 18){
           exit('Недоросль');
       }
   }
   public function getAge(): int{
       return $this ->age;
   }
}


$q = new User('Peter', 'qwe', '18');
//$q -> name = 'Peter';
//$q -> email = 'qwe';
//$q -> age = '18';


?>
