<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>PHP OOP</title>
</head>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen font-sans">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-12">
            <h1 class="text-5xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
                PHP Object-Oriented Programming
            </h1>
            <p class="text-xl text-gray-600 font-medium">Complete Guide with Examples</p>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mt-4 rounded"></div>
        </header>

        <?php

        /*
    <-------------
    class1

    class and object, properties and methods
    ------------->
    */
        echo '<section class="mb-12">';
        echo '<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">';
        echo '<div class="bg-gradient-to-r from-blue-500 to-blue-600 px-8 py-6">';
        echo '<h2 class="text-3xl font-bold text-white flex items-center">';
        echo '<span class="bg-white text-blue-600 rounded-full w-10 h-10 flex items-center justify-center text-lg font-black mr-4">1</span>';
        echo 'Class and Object Example</h2>';
        echo '</div>';
        echo '<div class="p-8">';
        echo '<div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-lg">';

        class HelloWorld
        {

            public $name;
            public $age;
            public $address;

            public function sayHello($fname = "Guest", $age = "unknown age", $address = "unknown address")
            {

                // $this->name = $this->name ?? "Guest";
                // $this->age = $this->age ?? "unknown age";
                // $this->address = $this->address ?? "unknown address";

                $this->name = $fname;
                $this->age = $age;
                $this->address = $address;

                return "Hello, World! From {$this->name}, age {$this->age}, living at {$this->address}.";
            }
        }

        $obj = new HelloWorld();
        $obj->name = "Alice";
        $obj->age = 30;
        $obj->address = "123 Main St, Anytown, USA";

        echo '<div class="mb-4 p-4 bg-green-100 border border-green-300 rounded-lg">';
        echo '<p class="text-green-800 font-semibold">✓ Object 1: ' . $obj->sayHello() . '</p>';
        echo '</div>';

        $obj2 = new HelloWorld();
        $obj2->name = "Bob";
        $obj2->age = 25;
        $obj2->address = "456 Elm St, Othertown, USA";

        echo '<div class="mb-4 p-4 bg-green-100 border border-green-300 rounded-lg">';
        echo '<p class="text-green-800 font-semibold">✓ Object 2: ' . $obj2->sayHello() . '</p>';
        echo '</div>';

        $obj3 = new HelloWorld();
        echo '<div class="mb-4 p-4 bg-green-100 border border-green-300 rounded-lg">';
        echo '<p class="text-green-800 font-semibold">✓ Object 3: ' . $obj3->sayHello('Charlie', 28, '789 Oak St, Sometown, USA') . '</p>';
        echo '</div>';
        echo '</div></div></div></section>';



        /*
    <-------------
    class2

    Constructor and Destructor
    ------------->
    */

        echo '<section class="mb-12">';
        echo '<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">';
        echo '<div class="bg-gradient-to-r from-green-500 to-green-600 px-8 py-6">';
        echo '<h2 class="text-3xl font-bold text-white flex items-center">';
        echo '<span class="bg-white text-green-600 rounded-full w-10 h-10 flex items-center justify-center text-lg font-black mr-4">2</span>';
        echo 'Constructor and Destructor</h2>';
        echo '</div>';
        echo '<div class="p-8">';
        echo '<div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-lg">';


        class HelloWorldConstructor
        {

            public $name;
            public $age;
            public $address;

            // Constructor
            public function __construct($fname = "Guest", $age = "unknown age", $address = "unknown address")
            {
                $this->name = $fname;
                $this->age = $age;
                $this->address = $address;
            }

            public function sayHello()
            {
                return "Hello, World! From {$this->name}, age {$this->age}, living at {$this->address}.";
            }

            // Destructor
            public function __destruct()
            {
                echo "<br>Object for {$this->name} is being destroyed.";
            }
        }


        $obj = new HelloWorldConstructor("David", 35, "101 Pine St, Newcity, USA");
        echo '<div class="mb-4 p-4 bg-green-100 border border-green-300 rounded-lg">';
        echo '<p class="text-green-800 font-semibold">✓ Constructor Called: ' . $obj->sayHello() . '</p>';
        echo '</div>';
        echo '</div></div></div></section>';



        /*
    <-------------
    class3

    Access Modifiers in Class (Public Private Protected)
    ------------->
    */

        echo '<section class="mb-12">';
        echo '<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">';
        echo '<div class="bg-gradient-to-r from-purple-500 to-purple-600 px-8 py-6">';
        echo '<h2 class="text-3xl font-bold text-white flex items-center">';
        echo '<span class="bg-white text-purple-600 rounded-full w-10 h-10 flex items-center justify-center text-lg font-black mr-4">3</span>';
        echo 'Access Modifiers</h2>';
        echo '</div>';
        echo '<div class="p-8">';
        echo '<div class="bg-purple-50 border-l-4 border-purple-500 p-6 rounded-lg">';
        class HelloWorldAccessModifiers
        {

            public $name;
            private $age;
            protected $address;

            public function __construct($fname = "Guest", $age = "unknown age", $address = "unknown address")
            {
                $this->name = $fname;
                $this->age = $age;
                $this->address = $address;
            }

            public function sayHello()
            {
                return "<br/> Hello, World! From {$this->name}, age {$this->getAge()}, living at {$this->getAddress()}.";
            }

            private function getAge()
            {
                return $this->age;
            }

            protected function getAddress()
            {
                return $this->address;
            }
        }
        $obj = new HelloWorldAccessModifiers("Eve", 29, "202 Maple St, Oldtown, USA");
        echo '<div class="mb-4 p-4 bg-purple-100 border border-purple-300 rounded-lg">';
        echo '<p class="text-purple-800 font-semibold">✓ Method Call: ' . $obj->sayHello() . '</p>';
        echo '</div>';
        echo '<div class="mb-4 p-4 bg-blue-100 border border-blue-300 rounded-lg">';
        echo '<p class="text-blue-800 font-semibold">✓ Public Access: Name = ' . $obj->name . '</p>';
        echo '</div>';
        echo '<div class="p-4 bg-red-100 border border-red-300 rounded-lg">';
        echo '<p class="text-red-800 font-semibold">✗ Private/Protected properties not accessible from outside</p>';
        echo '</div>';
        // echo "<br>" . $obj->age; // Not Accessible
        // echo "<br>" . $obj->address; // Not Accessible
        echo '</div></div></div></section>';




        /*
    <-------------
    class4
    Inheritance
    ------------->
    */

        echo '<section class="mb-12">';
        echo '<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">';
        echo '<div class="bg-gradient-to-r from-orange-500 to-orange-600 px-8 py-6">';
        echo '<h2 class="text-3xl font-bold text-white flex items-center">';
        echo '<span class="bg-white text-orange-600 rounded-full w-10 h-10 flex items-center justify-center text-lg font-black mr-4">4</span>';
        echo 'Inheritance</h2>';
        echo '</div>';
        echo '<div class="p-8">';
        echo '<div class="bg-orange-50 border-l-4 border-orange-500 p-6 rounded-lg">';

        // Example (Class + Subclass)
        // Parent Class

        class Animal
        {
            public $name;

            public function __construct($name)
            {
                $this->name = $name;
            }

            public function sound()
            {
                return "Animal makes a sound.";
            }
        }

        // Subclass (Child)
        class Dog extends Animal
        {

            // override method
            public function sound()
            {
                return "{$this->name} says: Woof Woof!";
            }
        }

        $dog = new Dog("Tommy");
        echo '<div class="mb-4 p-4 bg-orange-100 border border-orange-300 rounded-lg">';
        echo '<p class="text-orange-800 font-semibold">✓ Child Class Override: ' . $dog->sound() . '</p>';
        echo '</div>';
        echo '</div></div></div></section>';


        // final keyword

        final class FinalAnimal
        {
            public function sound()
            {
                return "Sound...";
            }
        }

        // ❌ Error: subclass তৈরি করা যাবে না
        // class FinalDog extends FinalAnimal {
        // 
        // }


        class AnimalWithFinalMethod
        {
            final public function sound()
            {
                return "Sound...";
            }
        }

        class DogWithFinalMethodError extends AnimalWithFinalMethod
        {
            // ❌ Error: final method override করা যাবে না
            // public function sound() {
            //     return "Woof!";
            // }
        }


        /*
    <-------------
    class5

    Constant
    ------------->
    */

        echo '<section class="mb-12">';
        echo '<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">';
        echo '<div class="bg-gradient-to-r from-red-500 to-red-600 px-8 py-6">';
        echo '<h2 class="text-3xl font-bold text-white flex items-center">';
        echo '<span class="bg-white text-red-600 rounded-full w-10 h-10 flex items-center justify-center text-lg font-black mr-4">5</span>';
        echo 'Constants</h2>';
        echo '</div>';
        echo '<div class="p-8">';
        echo '<div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg">';

        class Greetings
        {
            const MESSAGE = "Hello World!";
        }

        echo '<div class="mb-4 p-4 bg-red-100 border border-red-300 rounded-lg">';
        echo '<p class="text-red-800 font-semibold">✓ Class Constant: ' . Greetings::MESSAGE . '</p>';
        echo '</div>';

        class Goodbye
        {
            const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
            public function byebye()
            {
                echo '<div class="mb-4 p-4 bg-red-100 border border-red-300 rounded-lg">';
                echo '<p class="text-red-800 font-semibold">✓ Self Constant: ' . self::LEAVING_MESSAGE . '</p>';
                echo '</div>';
            }
        }

        $goodbye = new Goodbye();
        $goodbye->byebye();
        echo '</div></div></div></section>';



        /*
    <-------------
    class6

    Abstract Classes
    ------------->
    */

        echo '<section class="mb-12">';
        echo '<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">';
        echo '<div class="bg-gradient-to-r from-indigo-500 to-indigo-600 px-8 py-6">';
        echo '<h2 class="text-3xl font-bold text-white flex items-center">';
        echo '<span class="bg-white text-indigo-600 rounded-full w-10 h-10 flex items-center justify-center text-lg font-black mr-4">6</span>';
        echo 'Abstract Classes</h2>';
        echo '</div>';
        echo '<div class="p-8">';
        echo '<div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-lg">';


        abstract class Vehicle
        {
            abstract public function startEngine();

            public function honk()
            {
                return "Beep Beep!";
            }
        }

        class MyCar extends Vehicle
        {
            public function startEngine()
            {
                return "Car engine started.";
            }
        }


        $myCar = new MyCar();
        echo '<div class="mb-4 p-4 bg-indigo-100 border border-indigo-300 rounded-lg">';
        echo '<p class="text-indigo-800 font-semibold">✓ Vehicle: ' . $myCar->startEngine() . '</p>';
        echo '</div>';



        abstract class AbstractAnimal
        {
            public $name;

            // Constructor
            public function __construct($name)
            {
                $this->name = $name;
            }

            // Abstract Method
            abstract public function sound();

            // Normal Method 
            public function info()
            {
                return "This is an animal named {$this->name}.";
            }
        }
        class Cat extends AbstractAnimal
        {
            public function sound()
            {
                return "{$this->name} says: Meow Meow!";
            }
        }

        $myCat = new Cat("Whiskers");
        echo '<div class="mb-4 p-4 bg-indigo-100 border border-indigo-300 rounded-lg">';
        echo '<p class="text-indigo-800 font-semibold">✓ Animal Info: ' . $myCat->info() . '</p>';
        echo '</div>';
        echo '<div class="mb-4 p-4 bg-indigo-100 border border-indigo-300 rounded-lg">';
        echo '<p class="text-indigo-800 font-semibold">✓ Animal Sound: ' . $myCat->sound() . '</p>';
        echo '</div>';




        // Parent class
        abstract class CarBrand
        {
            public $name;
            public function __construct($name)
            {
                $this->name = $name;
            }
            abstract public function intro(): string;
        }

        // Child classes
        class Audi extends CarBrand
        {
            public function intro(): string
            {
                return "Choose German quality! I'm an {$this->name}!";
            }
        }

        class Volvo extends CarBrand
        {
            public function intro(): string
            {
                return "Proud to be Swedish! I'm a {$this->name}!";
            }
        }

        class Citroen extends CarBrand
        {
            public function intro(): string
            {
                return "French extravagance! I'm a {$this->name}!";
            }
        }

        // Create objects from the child classes
        $audi = new audi("Audi");
        echo '<div class="mb-4 p-4 bg-indigo-100 border border-indigo-300 rounded-lg">';
        echo '<p class="text-indigo-800 font-semibold">✓ Car Brand: ' . $audi->intro() . '</p>';
        echo '</div>';

        $volvo = new volvo("Volvo");
        echo '<div class="mb-4 p-4 bg-indigo-100 border border-indigo-300 rounded-lg">';
        echo '<p class="text-indigo-800 font-semibold">✓ Car Brand: ' . $volvo->intro() . '</p>';
        echo '</div>';

        $citroen = new citroen("Citroen");
        echo '<div class="mb-4 p-4 bg-indigo-100 border border-indigo-300 rounded-lg">';
        echo '<p class="text-indigo-800 font-semibold">✓ Car Brand: ' . $citroen->intro() . '</p>';
        echo '</div>';
        echo '</div></div></div></section>';



        /*
    <-------------
    class7

    Interface
    ------------->
    */

        echo '<section class="mb-12">';
        echo '<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">';
        echo '<div class="bg-gradient-to-r from-teal-500 to-teal-600 px-8 py-6">';
        echo '<h2 class="text-3xl font-bold text-white flex items-center">';
        echo '<span class="bg-white text-teal-600 rounded-full w-10 h-10 flex items-center justify-center text-lg font-black mr-4">7</span>';
        echo 'Interfaces</h2>';
        echo '</div>';
        echo '<div class="p-8">';
        echo '<div class="bg-teal-50 border-l-4 border-teal-500 p-6 rounded-lg">';


        interface Shape
        {
            public function area();
            public function perimeter();
        }

        class Rectangle implements Shape
        {
            private $width;
            private $height;

            public function __construct($width, $height)
            {
                $this->width = $width;
                $this->height = $height;
            }

            public function area()
            {
                return $this->width * $this->height;
            }

            public function perimeter()
            {
                return 2 * ($this->width + $this->height);
            }
        }

        $rect = new Rectangle(10, 5);
        echo '<div class="mb-4 p-4 bg-teal-100 border border-teal-300 rounded-lg">';
        echo '<p class="text-teal-800 font-semibold">✓ Rectangle Area: ' . $rect->area() . '</p>';
        echo '</div>';
        echo '<div class="mb-6 p-4 bg-teal-100 border border-teal-300 rounded-lg">';
        echo '<p class="text-teal-800 font-semibold">✓ Rectangle Perimeter: ' . $rect->perimeter() . '</p>';
        echo '</div>';


        interface PaymentGateway
        {
            public function pay($amount);
            public function refund($transactionId);
        }

        class SSLCommerz implements PaymentGateway
        {
            public function pay($amount)
            {
                echo '<div class="mb-2 p-3 bg-green-100 border border-green-300 rounded">';
                echo '<p class="text-green-800 font-medium">💳 Paying $' . $amount . ' using SSLCommerz...</p>';
                echo '</div>';
            }

            public function refund($transactionId)
            {
                echo '<div class="mb-2 p-3 bg-yellow-100 border border-yellow-300 rounded">';
                echo '<p class="text-yellow-800 font-medium">💰 Refunding ' . $transactionId . ' through SSLCommerz...</p>';
                echo '</div>';
            }
        }

        class Stripe implements PaymentGateway
        {
            public function pay($amount)
            {
                echo '<div class="mb-2 p-3 bg-green-100 border border-green-300 rounded">';
                echo '<p class="text-green-800 font-medium">💳 Paying $' . $amount . ' using Stripe...</p>';
                echo '</div>';
            }

            public function refund($transactionId)
            {
                echo '<div class="mb-2 p-3 bg-yellow-100 border border-yellow-300 rounded">';
                echo '<p class="text-yellow-800 font-medium">💰 Refund processed via Stripe!</p>';
                echo '</div>';
            }
        }

        function processPayment(PaymentGateway $gateway, $amount, $refundTransactionId = null)
        {
            if ($refundTransactionId !== null) {
                $gateway->refund($refundTransactionId);
            } else {
                $gateway->pay($amount);
            }
        }

        processPayment(new Stripe(), 1000);
        processPayment(new Stripe(), 1000, 'stripe_txn_12345');
        processPayment(new SSLCommerz(), 1500);
        processPayment(new SSLCommerz(), 1500, 'ssl_txn_67890');
        echo '</div></div></div></section>';




        /*
    <-------------
    class8

    Traits
    ------------->
    */

        echo '<section class="mb-12">';
        echo '<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">';
        echo '<div class="bg-gradient-to-r from-pink-500 to-pink-600 px-8 py-6">';
        echo '<h2 class="text-3xl font-bold text-white flex items-center">';
        echo '<span class="bg-white text-pink-600 rounded-full w-10 h-10 flex items-center justify-center text-lg font-black mr-4">8</span>';
        echo 'Traits</h2>';
        echo '</div>';
        echo '<div class="p-8">';
        echo '<div class="bg-pink-50 border-l-4 border-pink-500 p-6 rounded-lg">';


        trait Logger
        {
            public function log($msg)
            {
                echo '<div class="mb-2 p-3 bg-pink-100 border border-pink-300 rounded">';
                echo '<p class="text-pink-800 font-medium">📝 LOG: ' . $msg . '</p>';
                echo '</div>';
            }
        }

        class User
        {
            use Logger;
        }

        $obj = new User();
        $obj->log("User created.");


        trait ApiResponse
        {
            public function success($data)
            {
                return [
                    "status" => "success",
                    "data" => $data
                ];
            }

            public function error($message)
            {
                return [
                    "status" => "error",
                    "message" => $message
                ];
            }
        }

        class ProductController
        {
            use ApiResponse;

            public function getProduct()
            {
                // fetch or build products (replace with real data source)
                $products = [
                    ['id' => 1, 'name' => 'Product A', 'price' => 9.99],
                    ['id' => 2, 'name' => 'Product B', 'price' => 19.99],
                ];

                if (empty($products)) {
                    return $this->error('No products found.');
                }

                return $this->success($products);
            }
        }

        class OrderController
        {
            use ApiResponse;

            public function getOrders()
            {
                // fetch or build orders (replace with real data source)
                $orders = [
                    // ['id' => 1, 'product' => 'Product A', 'quantity' => 2, 'total' => 19.98],
                    // ['id' => 2, 'product' => 'Product B', 'quantity' => 1, 'total' => 19.99],
                ];

                if (empty($orders)) {
                    return $this->error('No orders found.');
                }

                return $this->success($orders);
            }
        }

        $productController = new ProductController();
        echo '<div class="mb-4 p-4 bg-green-100 border border-green-300 rounded-lg">';
        echo '<p class="text-green-800 font-semibold">✓ Product API: ' . json_encode($productController->getProduct()) . '</p>';
        echo '</div>';
        $orderController = new OrderController();
        echo '<div class="mb-4 p-4 bg-yellow-100 border border-yellow-300 rounded-lg">';
        echo '<p class="text-yellow-800 font-semibold">⚠ Order API: ' . json_encode($orderController->getOrders()) . '</p>';
        echo '</div>';
        echo '</div></div></div></section>';



        /*
    <-------------
    class9

    Static Property & Static Method
    ------------->
    */
        echo '<section class="mb-12">';
        echo '<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">';
        echo '<div class="bg-gradient-to-r from-yellow-500 to-yellow-600 px-8 py-6">';
        echo '<h2 class="text-3xl font-bold text-white flex items-center">';
        echo '<span class="bg-white text-yellow-600 rounded-full w-10 h-10 flex items-center justify-center text-lg font-black mr-4">9</span>';
        echo 'Static Properties & Methods</h2>';
        echo '</div>';
        echo '<div class="p-8">';
        echo '<div class="bg-yellow-50 border-l-4 border-yellow-500 p-6 rounded-lg">';

        // Static Property
        class ProductInfo
        {
            // public $pname = "Book";
            static public $pname = "Book";
            public static $category = "Education";

            public function getNormalProductInfo()
            {
                return self::$pname . ", Category: " . self::$category;
            }
        }

        // echo ProductInfo::$pname; // This will cause an error
        echo '<div class="mb-4 p-4 bg-yellow-100 border border-yellow-300 rounded-lg">';
        echo '<p class="text-yellow-800 font-semibold">✓ Static Property Access: ' . ProductInfo::$pname . '</p>';
        echo '</div>';
        echo '<div class="mb-4 p-4 bg-yellow-100 border border-yellow-300 rounded-lg">';
        echo '<p class="text-yellow-800 font-semibold">✓ Static Property Access: ' . ProductInfo::$category . '</p>';
        echo '</div>';

        $pinfo =  new ProductInfo();
        echo '<div class="mb-6 p-4 bg-yellow-100 border border-yellow-300 rounded-lg">';
        echo '<p class="text-yellow-800 font-semibold">✓ Instance method call - Product: ' . $pinfo->getNormalProductInfo() . '</p>';
        echo '</div>';

        // Static Method
        class ProductManager
        {
            // public $pname = "Book";
            static public $pname = "Book";
            public static $category = "Education";

            public static function getStaticProductInfo()
            {

                return "Product: " . self::$pname . ", Category: " . self::$category;
            }

            public function callStaticFromInstance()
            {
                return self::getStaticProductInfo();
                // return "Demo Method";
            }
        }

        echo '<div class="mb-4 p-4 bg-yellow-100 border border-yellow-300 rounded-lg">';
        echo '<p class="text-yellow-800 font-semibold">✓ Static method call - ' . ProductManager::getStaticProductInfo() . '</p>';
        echo '</div>';
        $pinfo2 =  new ProductManager();
        echo '<div class="mb-6 p-4 bg-yellow-100 border border-yellow-300 rounded-lg">';
        echo '<p class="text-yellow-800 font-semibold">✓ Instance method accessing static - ' . $pinfo2->callStaticFromInstance() . '</p>';
        echo '</div>';



        //use of static method in another class
        class message
        {
            public static function welcome()
            {
                echo '<div class="mb-4 p-4 bg-blue-100 border border-blue-300 rounded-lg">';
                echo '<p class="text-blue-800 font-semibold">✓ Cross-class static call: Thanks for watching my video</p>';
                echo '</div>';
            }
        }

        class otherClass
        {
            public function welcomeMSG()
            {
                message::welcome();  // calling static method
            }
        }

        $msg = new otherClass();
        $msg->welcomeMSG();

        //use of static property in child class
        class ParentClass
        {
            public static $greeting = "Hello from ParentClass!";
        }

        echo '<div class="mb-4 p-4 bg-green-100 border border-green-300 rounded-lg">';
        echo '<p class="text-green-800 font-semibold">✓ Parent static property: ' . ParentClass::$greeting . '</p>';
        echo '</div>';

        class ChildClass extends ParentClass
        {
            public function showGreeting()
            {
                return "child: " . parent::$greeting; // Accessing static property from parent class
            }
        }

        $child = new ChildClass();
        echo '<div class="mb-4 p-4 bg-green-100 border border-green-300 rounded-lg">';
        echo '<p class="text-green-800 font-semibold">✓ Child accessing parent static: ' . $child->showGreeting() . '</p>';
        echo '</div>';
        echo '</div></div></div></section>';




        /*
    <-------------
    class10

    This Keyword
    ------------->
    */

        echo '<section class="mb-12">';
        echo '<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">';
        echo '<div class="bg-gradient-to-r from-gray-600 to-gray-700 px-8 py-6">';
        echo '<h2 class="text-3xl font-bold text-white flex items-center">';
        echo '<span class="bg-white text-gray-700 rounded-full w-10 h-10 flex items-center justify-center text-lg font-black mr-4">10</span>';
        echo '$this Keyword</h2>';
        echo '</div>';
        echo '<div class="p-8">';
        echo '<div class="bg-gray-50 border-l-4 border-gray-500 p-6 rounded-lg">';

        class Student
        {
            public $name;
            public $age;
            public $class;

            public function __construct($name, $age, $class)
            {
                $this->name = $name;
                $this->age = $age;
                $this->class = $class;
            }

            public function getInfo()
            {
                return "Name: " . $this->name . ", Age: " . $this->age . ", Class: " . $this->class;
            }
        }

        $student = new Student("John Doe", 20, "Biology");
        echo '<div class="mb-4 p-4 bg-gray-100 border border-gray-300 rounded-lg">';
        echo '<p class="text-gray-800 font-semibold">✓ Student Info: ' . $student->getInfo() . '</p>';
        echo '</div>';
        echo '</div></div></div></section>';

        echo '</div>'; // Close container

        // Footer
        echo '<footer class="text-center py-8 bg-gray-800 text-white mt-16">';
        echo '<p class="text-lg font-semibold">PHP OOP Complete Guide</p>';
        echo '<p class="text-gray-400 mt-2">Master Object-Oriented Programming in PHP</p>';
        echo '</footer>';

        ?>

</body>

</html>