<?php

namespace Html;
//102. Write a PHP program to capture a variable number of arguments to a given function. 
// Sample Output:

// int(3)
// int(10)

function NoofVar($var){

    foreach($var as $v){
        $sum += $v;
    }
    return $sum;
}

echo var_dump(NoOfVar([9, 8, 7, 6, 5]));
echo "<br>" .var_dump(NoOfVar([1, 1, 1, 1]));

//DEFINE  A CONSTANT
define("MYNAME", "POONAM BHARARA");
echo MYNAME;

    