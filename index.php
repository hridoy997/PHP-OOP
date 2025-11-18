<?php 

/*
<-------------
class1

class and object, properties and methods
------------->
*/

// class HelloWorld {

//     public $name;
//     public $age;
//     public $address;
    
//     public function sayHello($fname = "Guest", $age = "unknown age", $address = "unknown address") {

//         // $this->name = $this->name ?? "Guest";
//         // $this->age = $this->age ?? "unknown age";
//         // $this->address = $this->address ?? "unknown address";

//         $this->name = $fname;
//         $this->age = $age;
//         $this->address = $address;
        
//         return "Hello, World! From {$this->name}, age {$this->age}, living at {$this->address}.";
//     }
// }

// $obj = new HelloWorld();
// $obj->name = "Alice";   
// $obj->age = 30;
// $obj->address = "123 Main St, Anytown, USA";

// echo $obj->sayHello();

// $obj2 = new HelloWorld();
// $obj2->name = "Bob";
// $obj2->age = 25;
// $obj2->address = "456 Elm St, Othertown, USA";

// echo "<br>" . $obj2->sayHello();

// $obj3 = new HelloWorld();
// echo "<br>" . $obj3->sayHello('Charlie', 28, '789 Oak St, Sometown, USA');



/*
<-------------
class2

Constructor and Destructor
------------->
*/


// class HelloWorld {

//     public $name;
//     public $age;
//     public $address;

//     // Constructor
//     public function __construct($fname = "Guest", $age = "unknown age", $address = "unknown address") {
//         $this->name = $fname;
//         $this->age = $age;
//         $this->address = $address;
//     }

//     public function sayHello() {
//         return "Hello, World! From {$this->name}, age {$this->age}, living at {$this->address}.";
//     }

//     // Destructor
//     public function __destruct() {
//         echo "<br>Object for {$this->name} is being destroyed.";
//     }
// }


// $obj = new HelloWorld("David", 35, "101 Pine St, Newcity, USA");
// echo $obj->sayHello();



/*
<-------------
class3

Access Modifiers in Class (Public Private Protected)
------------->
*/

// class HelloWorld {

//     public $name;
//     private $age;
//     protected $address;

//     public function __construct($fname = "Guest", $age = "unknown age", $address = "unknown address") {
//         $this->name = $fname;
//         $this->age = $age;
//         $this->address = $address;
//     }

//     public function sayHello() {
//         return "Hello, World! From {$this->name}, age {$this->getAge()}, living at {$this->getAddress()}.";
//     }

//     private function getAge() {
//         return $this->age;
//     }

//     protected function getAddress() {
//         return $this->address;
//     }


// }

// $obj = new HelloWorld("Eve", 29, "202 Maple St, Oldtown, USA");
// echo $obj->sayHello();
// echo "<br>" . $obj->name; // Accessible
// echo "<br>" . $obj->age; // Not Accessible
// echo "<br>" . $obj->address; // Not Accessible




/*
<-------------
class4

 Inheritance
------------->
*/

// Example (Class + Subclass)
// Parent Class

// class Animal {
//     public $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     public function sound() {
//         return "Animal makes a sound.";
//     }
// }

// // Subclass (Child)
// class Dog extends Animal {

//     // override method
//     public function sound() {
//         return "{$this->name} says: Woof Woof!";
//     }
// }

// $dog = new Dog("Tommy");
// echo $dog->sound();


// final keyword

// final class Animal {
//     public function sound() {
//         return "Sound...";
//     }
// }

// // ❌ Error: subclass তৈরি করা যাবে না
// class Dog extends Animal {

// }


// class Animal {
//     final public function sound() {
//         return "Sound...";
//     }
// }

// class Dog extends Animal {
//     // ❌ Error: final method override করা যাবে না
//     public function sound() {
//         return "Woof!";
//     }
// }


/*
<-------------
class5

Constant
------------->
*/
// class Greetings {
//     const MESSAGE = "Hello World!";
// }

// echo Greetings::MESSAGE;

// class Goodbye {
//   const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
//   public function byebye() {
//     echo self::LEAVING_MESSAGE;
//   }
// }

// $goodbye = new Goodbye();
// $goodbye->byebye();



/*
<-------------
class6

Abstract Classes
------------->
*/


// abstract class Vehicle {
//     abstract public function startEngine();

//     public function honk() {
//         return "Beep Beep!";
//     }
// }

// class Car extends Vehicle {
//     public function startEngine() {
//         return "Car engine started.";
//     }
// }


// $myCar = new Car();
// echo $myCar->startEngine();



// abstract class Animal {
//     public $name;

//     // Constructor
//     public function __construct($name) {
//         $this->name = $name;
//     }

//     // Abstract Method
//     abstract public function sound();

//     // Normal Method 
//     public function info() {
//         return "This is an animal named {$this->name}.";
//     }
// }
// class Cat extends Animal {
//     public function sound() {
//         return "{$this->name} says: Meow Meow!";
//     }
// }

// $myCat = new Cat("Whiskers");
// echo "<br>" . $myCat->info();
// echo "<br>" . $myCat->sound();




// // Parent class
// abstract class Car {
//   public $name;
//   public function __construct($name) {
//     $this->name = $name;
//   }
//   abstract public function intro() : string;
// }

// // Child classes
// class Audi extends Car {
//   public function intro() : string {
//     return "Choose German quality! I'm an $this->name!";
//   }
// }

// class Volvo extends Car {
//   public function intro() : string {
//     return "Proud to be Swedish! I'm a $this->name!";
//   }
// }

// class Citroen extends Car {
//   public function intro() : string {
//     return "French extravagance! I'm a $this->name!";
//   }
// }

// // Create objects from the child classes
// $audi = new audi("Audi");
// echo $audi->intro();
// echo "<br>";

// $volvo = new volvo("Volvo");
// echo $volvo->intro();
// echo "<br>";

// $citroen = new citroen("Citroen");
// echo $citroen->intro();



/*
<-------------
class7

Interface
------------->
*/


// interface Shape {
//     public function area();
//     public function perimeter();
// }

// class Rectangle implements Shape {
//     private $width;
//     private $height;

//     public function __construct($width, $height) {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function area() {
//         return $this->width * $this->height;
//     }

//     public function perimeter() {
//         return 2 * ($this->width + $this->height);
//     }
// }

// $rect = new Rectangle(10, 5);
// echo "Area: " . $rect->area() . "<br>";
// echo "Perimeter: " . $rect->perimeter() . "<br>";


// interface PaymentGateway {
//     public function pay($amount);
//     public function refund($transactionId);
// }

// class SSLCommerz implements PaymentGateway {
//     public function pay($amount) {
//         echo "Paying $amount using SSLCommerz...";
//     }

//     public function refund($transactionId) {
//         echo "Refunding $transactionId through SSLCommerz...";
//     }
// }

// class Stripe implements PaymentGateway {
//     public function pay($amount) {
//         echo "Paying $amount using Stripe...";
//     }

//     public function refund($transactionId) {
//         echo "Refund processed via Stripe!";
//     }
// }

// function processPayment(PaymentGateway $gateway, $amount, $refundTransactionId = null) {
//     if ($refundTransactionId !== null) {
//         $gateway->refund($refundTransactionId);
//     } else {
//         $gateway->pay($amount);
//     }
// }

// processPayment(new Stripe(), 1000);
// echo "<br>";
// processPayment(new Stripe(), 1000, 'stripe_txn_12345');
// echo "<br>";
// processPayment(new SSLCommerz(), 1500);
// echo "<br>";
// processPayment(new SSLCommerz(), 1500, 'ssl_txn_67890');




/*
<-------------
class8

Traits
------------->
*/

trait Logger {
    public function log($msg) {
        echo "LOG: $msg";
    }
}

class User {
    use Logger;
}

$obj = new User();
$obj->log("User created.");




?>