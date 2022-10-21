<?php

//26. Write a PHP script to get the information about the operating system PHP is running on. 

echo "Information about Operating sytem:  ".  php_uname() ."<br>";
echo "Operating sytem:  " . PHP_OS;

//27. Write a PHP script to print out all the credits for PHP.



//$phpCredits = phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);
// echo $phpCredits;


//28. Write a PHP script to get the directory path used for temporary files.

$file = tempnam(sys_get_temp_dir(), 'File1');

echo "<br> The Temporary filename is:  ". $file . "<br>";


//29. Write a PHP script to get the names of the functions of a module. Go to the editor
//Note : Find XML, JSON functions etc.

   echo get_extension_funcs("JSON");
   echo get_extension_funcs('XML');

//30. Write a PHP script to get the time of the last modification of the current page (Repeated);


//31. Write a PHP program to swap two variables. 

$i = 50;
$j = 100;
echo "Before swapping {$i} and {$j}";
$temp = $i;
$i = $j;
$j = $temp;

echo "<BR>" ."After swapping {$i} and {$j}";

//33. Write a PHP program to convert word to digit. 
//Input: zero;three;five;six;eight;one
//Output: 035681


function wordToDigit($stringArr){
    $stringArr = explode(';', $stringArr);
    $output = '';

    foreach($stringArr as $sArr){
        switch(trim($sArr)){
            case 'zero':
                $output .= '0';
                break;
            case 'three':
                $output .= '1';
                break;
            case 'five':
                $output .= '5';
                break;
            case 'six':
                $output .= '6';
                break;
            case 'eight':
                $output .= '8';
                break;
            case 'one':
                $output .= '1';
                break;
        }

    }
    
    return $output;
}
    echo "<br> These string are given: " . wordToDigit('zero;one;five;eight;');



//35. Write a PHP program to remove duplicates from a sorted list. Go to the editor
//Input: (1,1,2,2,3,4,5,5)
//Output: (1,2,3,4,5)


function RemoveDuplicateVal($arr){

 $uniqueArr =  array_values(array_unique($arr));
    //print_r($uniqueArr);
    return $uniqueArr;
}
$arr = array(1, 1, 2, 2, 4, 4, 8, 9);
echo "<pre>";
print_r(RemoveDuplicateVal($arr));
echo "</pre>";

//36. Write a PHP program to test if a given string occurs at the end of another given string. 

// $str1_len =  strlen('3456');


// echo  substr('123456', $str1_len - $str2_len, $str2_len);

//37. Write a PHP program to compute the sum of the prime numbers less than 100. Go to the editor

//38. Write a PHP program to valid an email addres //Repeated Question


//39. Write a PHP program to get the size of a file.

echo "Size of the file: " .filesize("Qn_part1.php") . "<BR>";

//40. Write a PHP program to calculate the mod of two given integers without using any inbuilt modulus operator.


//41. Write a PHP program to print out the multiplication table upto 6*6. Go to the editor

    for($i=1;$i<=7-1;$i++){
        for($j=1;$j<=6;$j++){
            
            $multi = $j * $i;
            echo $multi . "  ";
            
        }
        echo "<br>";
    }

// 42. Write a PHP program to find the first non-repeated character in a given string. Go to the editor
// Input: Green
// Output: G
// Input: abcdea
// Output: b

function NonRepeatChar($string){
    for($i=0;$i<=strlen($string);$i++){
        if(substr_count($string, substr($string, $i, 1))){
            return substr($string, $i, 1);
        }
    }
}
echo "Out of Poonam, First Non Repeating Character is: ";
print_r(NonRepeatChar('Poonam'));


//43. Write a PHP program that multiplies corresponding elements of two given lists. 

function list2comp($x, $y){
    
    // $mulityList = array();
    $x = explode(' ', trim($x));
    $y = explode(' ', trim($y));

    foreach($x as $key => $val){
        
        $listmulti[$key]  = $x[$key] * $y[$key];
        
    }
    return implode(' ', $listmulti);
}

echo "<br> Multiplication of two list elements:  " . list2comp(("1 2 4 5"), ("20 5 5 30")) . "\n";


//44. Write a PHP program to print out the sum of pairs of numbers of a given sorted array of positive integers which is equal to a given number.

function Possible_pair($no, $sum_ofPair){

    $noOfPair = "";

    for($i=0;$i<=count($no);$i++){
        for($j=$i+1;$j<count($no);$j++){
            if($no[$i] + $no[$j] == $sum_ofPair){
                $pairs .= $no[$i] .",". $no[$j]  . ";";
            }
        }
    }
    return $pairs;
}
$no = array(0,1,2,3,4,5,6);
echo Possible_pair($no, 5);

//45. Write a PHP program to compute the sum of the digits of a number. 

function sumOfDigits($digit){

    $digitsSum = 0;
    for($i=0; $i< strlen($digit);$i++){
        $digitsSum += $digit[$i]; 
    }
    return $digitsSum;
}
echo "<br> Sum of Digits are";

echo sumOfDigits("123456678");

//47. Write a PHP program to compute the digit number of sum of two given integers.Repeated question

