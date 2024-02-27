<?php
// private only class can access -- itself
// protected class -- itself and its childeren can access
// public


// class NameOfTheClass{
//     private int $id;
//     public string $name;

//     public int $yearBorn;
//     public int $age;

//     public function __construct(string $name,int $yearBorn,int $id){
//         $this->id = $id; // we can access private value as like public.Trick from me :)
//         $this->name = $name;
//         $this->yearBorn = $yearBorn;
//         $this->calculateAge();
//     }

//     public function calculateAge(){
//         $this->age = (int) date('Y') - $this->yearBorn;
//     }
    
// }

// $human = new NameOfTheClass('Hamdi',1998,1);

// echo $human->age;



/*
 |++++++++++++++++++++++++++++++++++++++++
 |              INHARITANCE
 |++++++++++++++++++++++++++++++++++++++++
*/



// class Car{
//     public function drive(){
//         echo "car is driving<br>";
//     }
// }

// class ElectricCar extends Car{
//     protected function epcu (){
//         echo "I am the Electric Power Control Unit<br>";
//     }
// }

// class Tesla extends ElectricCar{
//     public function autoDrive(){
//         echo "I got tihis.You can sleep<br>";
//         $this->epcu();
//     }
// }


// -->> Tesla is a ElectricCar and ElectricCar is a Car

// -->> Classes can access to functionallities of its parent/parents
// -->> Parents can't access to func. of its child/children
// $car->epcu(); X   BUT   $tesla->drive();


// $car = new Car();
// $car->drive();
// $tesla = new Tesla();
// // $tesla ->epcu(); False usage
// $tesla->autoDrive();// True usage
// $tesla ->drive();




/*
 |++++++++++++++++++++++++++++++++++++++++
 |              NAMESPACE
 |++++++++++++++++++++++++++++++++++++++++
*/

// provide a namespace for classes with same class name.
// create a obj. from namespace is just for examp.
//  -> $bookOrder = new Book\Order();


/*
 |++++++++++++++++++++++++++++++++++++++++++
 |         Static and opposite of it
 |++++++++++++++++++++++++++++++++++++++++++
*/


// class StaticHuman{
//     private static $name = 'Static Human';
//     public static function sayHello(){
//         echo 'Hello everyone! My class name is '. self::$name;
//     }
// }

// class Human{
//     private $name = 'Human';
//     public function sayHello(){
//         echo '<br>Hello everyone! My class name is '. $this->name;
//     }
// }


// StaticHuman::sayHello();
// $human = new Human();
// $human->sayHello();




/*
 |++++++++++++++++++++++++++++++++++++++++++
 |             Method Chaning
 |++++++++++++++++++++++++++++++++++++++++++
*/


// class Human{
//     private $name;
//     private $age;

//     public function setName($name){
//         $this->name = ucfirst($name);
//         return $this;
//     }

//     public function setAge($age){
//         $this->age = $age;
//         return $this;
//     }

//     public function Introduce(){
//         return "Hello my name is ". $this->name.  ' and I am ' . $this->age. ' years old.';
//     }
// }


// $hamdi = new Human();
// echo $hamdi->setName('hamdi')
// ->setAge(26)
// ->Introduce();



/*
 |++++++++++++++++++++++++++++++++++++++++++
 |                Interface
 |++++++++++++++++++++++++++++++++++++++++++
*/

// interface Human {
//     public function sayName();
//     public function getAge(int $yearBorn);
// }

// class Hamdi implements Human,...,... {
//     public function sayName() {
//         echo "I am Hamdi<br>";
//     }
//     public function getAge(int $yearBorn) {
//         echo 'I am '.(date('Y') - $yearBorn).' years old<br>';
//     }

//     public function canFly(){
//         echo "I can't fly";
//     }
// }

// $hamdi = new Hamdi();
// $hamdi->sayName();
// $hamdi->getAge(1998);
// $hamdi->canFly();


/*
 |++++++++++++++++++++++++++++++++++++++++++
 |                CONSTANT
 |++++++++++++++++++++++++++++++++++++++++++
*/

// class Human {
//     const NAME = "Hamdi";
// }

// $human = new Human();
// echo human::NAME;



/*
 |++++++++++++++++++++++++++++++++++++++++++
 |                Abstract Class
 |++++++++++++++++++++++++++++++++++++++++++
*/

// abstract class Human{
//     private $name;
//     public function sayHello(){
//         echo "hello";
//     }
    
//     abstract protected function nationality();
// }

// class Hamdi extends Human{
//     public function nationality(){
//         echo "my nationality is ";
//     }
// }



/*
 |++++++++++++++++++++++++++++++++++++++++++
 |           <3   TRAIT  <3
 |++++++++++++++++++++++++++++++++++++++++++
*/

// trait Speak{
//     public function speaking(){
//         echo "hello I'm speaking<br>";
//     }
// }

// trait Eat{
//     public function eating(){
//         echo "hello I'm eating<br>";
//     }
// }

// class Human{
//     use Speak,Eat;
// }

// $hamdi = new Human();
// $hamdi->eating();
// $hamdi->speaking();


/*
 |++++++++++++++++++++++++++++++++++++++++++
 |           Null Safe Operator
 |++++++++++++++++++++++++++++++++++++++++++
*/


// class Person {
//     public ?Home $home = null;
// }

// class Home {
//     public $address = "here";
// }

// $person1 = null;

// echo $person1?->home?->address;  //Chaining works
// // for reading


/*
 |++++++++++++++++++++++++++++++++++++++++++
 |       Constructor Property Promotion
 |++++++++++++++++++++++++++++++++++++++++++
*/


// class Person
// {
//     public $name;
//     public $age;
//     public function __construct(string $name, int $age){
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function Introduce(){
//         return "Hello my name is $this->name and I am $this->age years old ";
//     }
// }

// $person = new Person("Hamdi",26);
// echo $person->Introduce();

// ---->>>> This method can do same thing with short way  <<-------

// class Person
// {
    
//     public function __construct(public string $name,public int $age){
//         if($name == 'Hamdi'){
//             echo "hello from in a if condition.<br>";
//         }
//     }

//     public function Introduce(){
//         return "Hello my name is $this->name and I am $this->age years old ";
//     }
// }

// $person = new Person("Hamdi",26);
// echo $person->Introduce();




/*
 |++++++++++++++++++++++++++++++++++++++++++
 |           Regular expression
 |++++++++++++++++++++++++++++++++++++++++++
*/

//-------   /pattern/  -------

// $string = "hello youtube,hello instagram";
// $pattern = "/youtube/";

// if(preg_match($pattern,$string,$matches)){
//     print_r($matches);
// }else{
//     echo "there weren't any matches";
// }


//-------   replace  -------

// $string = "hello youtube,hello instagram";
// $pattern = "/hello/";
// $replacement = "Hi";
// $limit = 1; // if we dont put this all hellos will be hi

// $newString = preg_replace($pattern,$replacement,$string,$limit);
// echo $newString;