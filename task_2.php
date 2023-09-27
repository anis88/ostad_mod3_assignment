<?php
// Task 2: Array Manipulation
// Create an array called $numbers containing the numbers 1 to 10.
// Write a PHP function which takes the "$numbers" 
//array as an argument to remove the even numbers from the array and print the resulting array.

// Option1:
// function removeEven($numbers)
// {
//     return ($numbers & 1);
// }

// $numbers = [1,2,3,4,5,6, 7, 8, 9, 10];

// print_r(array_filter($numbers, "removeEven"));



// Option2:
// $numbers = [1,2,3,4,5,6,7,8,9,10];

// function removeEven($numbers)
// {
//     function even($numbers){
//         return ($numbers & 1);
//     }
//     print_r(array_filter($numbers, "even"));
// }

// removeEven($numbers);


// Option3:
function removeEvenNumbers($arr) {
    $result = array();
    foreach ($arr as $num) {
        if ($num % 2 !== 0) {
            $result[] = $num;
        }
    }
    return $result;
}

$numbers = [1,2,3,4,5,6,7,8,9,10];
$filteredNumbers = removeEvenNumbers($numbers);
print_r($filteredNumbers);







?>