<?php
    function myCallbackFunction() {
        echo "Hello World from Function<br/>";
    }

    class myClass{
        static function myCallbackMethod(){
            echo "Hello world from method<br/>";
        }
    }

    call_user_func('myCallbackFunction');
    echo '<hr>';

    call_user_func(array('myClass','myCallbackMethod'));
    echo '<hr>';

    $obj = new myClass();
    call_user_func(array($obj,'myCallbackMethod'));
    echo '<hr>';

    myClass::myCallbackMethod();
    echo '<hr>';


    $firstOfArray = 0;
    $firstOfArray = function(array $array) {
        if(count($array) == 0) { return null;}
        return $array[0];
    };
    $values = [3, 2, 1];
    echo $firstOfArray($values);