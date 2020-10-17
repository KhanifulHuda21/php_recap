<?php

function sayName($name="Gaesss")
{
    echo "Hello" .$name.PHP_EOL;
}

sayName();
sayName("Ariel");

call_user_func('sayName','John Doe');
call_user_func_array('sayName',['Jane Doe']); 

//Anonymouse Function(Closure);
$soldier=function($name){echo $name.PHP_EOL;};

$soldier('Caption Price');

// $result=fn($x)=>$x*2;
// echo $result(19);

function getLastName($name)
{
    $real_name=explode(" ",$name);

    $getLastIndex=count($real_name)-1;

    if ($real_name[$getLastIndex]!="Doe")
    {
        return "Your not Doe family";
    }

    return $real_name[$getLastIndex].PHP_EOL;
}

echo getLastName("John Doe Zuckernnberg");