<?php

/**
 * Types
 * 
 * Compound types:
 * 
 * - Array
 * - Object
 * - Callable
 * - Iterable
 * 
 * @see https://www.php.net/manual/en/language.types.intro.php
 */

/**
 * Array
 * 
 * @see https://www.php.net/manual/en/language.types.array.php
 */

// Before PHP 5.4
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Since PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];

 /**
 * Object
 * 
 * @see https://www.php.net/manual/en/language.types.object.php
 */

 class Foo
 {
     function say_hello() {
         echo 'Hello World';
     }
 }

 $bar = new Foo;
 $bar->say_hello();

 /**
 * Callable
 * 
 * @see https://www.php.net/manual/en/language.types.callable.php
 * @todo Replace php.net example with own example.
 */

// An example callback function
function my_callback_function() {
    echo 'hello world!';
}

// An example callback method
class MyClass {
    static function myCallbackMethod() {
        echo 'Hello World!';
    }
}

// Type 1: Simple callback
call_user_func('my_callback_function');

// Type 2: Static class method call
call_user_func(array('MyClass', 'myCallbackMethod'));

// Type 3: Object method call
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));

// Type 4: Static class method call (As of PHP 5.2.3)
call_user_func('MyClass::myCallbackMethod');

// Type 5: Relative static class method call (As of PHP 5.3.0)
class A {
    public static function who() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::who')); // A

// Type 6: Objects implementing __invoke can be used as callables (since PHP 5.3)
class C {
    public function __invoke($name) {
        echo 'Hello ', $name, "\n";
    }
}

$c = new C();
call_user_func($c, 'PHP!');

 /**
 * Iterable
 * 
 * @see https://www.php.net/manual/en/language.types.iterable.php
 * @todo Replace php.net example with own example.
 */

function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    } 
}
