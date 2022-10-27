<?php


// 48. Write a PHP program to check whether three given lengths (integers) of three sides form a right triangle. Print "Yes" if the given sides form a right triangle otherwise print "No". Go to the editor
// Input:
// Integers separated by a single space.
// 1 = length of the side = 1,000
// Output:

// YES


$a = 7;
$b = 6;
$c = 5;

$a *= $a;
$b *= $b;
$c *= $c;

if($a+$b == $c || $a+$c == $b || $b + $c = $a){
    echo "YES" . "<br>";
}else{
    echo "NO" . "<br>";
}



// 55. Write a PHP program that accepts six numbers as input and sorts them in descending order. Go to the editor
// Input: Input consists of six numbers n1, n2, n3, n4, n5, n6 (-100000 = n1, n2, n3, n4, n5, n6 = 100000). The six numbers are separated by a space.
// Output:

// After sorting the said integers:
// 9 8 7 6 4 2


function DescArr($arr){
    
    for($i=0;$i<=count($arr);$i++){
        
        for($j=0;$j<=count($arr); $j++){
            if($arr[$j] < $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    $arr = implode(' ', $arr);
    return $arr;
}
$arr = [2, 6, 8, 9, 1];
print_r(DescArr($arr));
