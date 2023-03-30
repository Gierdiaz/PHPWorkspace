<?php
//We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visting";
    public function bye() {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye();
$goodbye->bye();

?>