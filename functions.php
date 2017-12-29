<?php
function sum($number_one,$number_two)
{
    global $db_user_name;
    echo $db_user_name;
//    return ($number_one + $number_two) - 2;
}

$db_user_name = 'root';


function sample($number_one,$number_two)
{
    global $db_user_name;
    echo $db_user_name;
//    return ($number_one + $number_two) - 2;
}

function increase(){
    static $data = 10;
    echo $data;
    $data++;
}

increase();
increase();
increase();
increase();
increase();
increase();
increase();



//sum(10,20);