<?php

$age = 20;
function fun()
{
    global $age;
    // static it wont reset the value of the num it holds current value when the function reused so if this function called twice than num will be 2
    static $num = 0;
    $num++;

    return $num;
}

echo fun();
echo fun();
echo fun();