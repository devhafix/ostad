<?php
// 1. Write a PHP function to sort an array of strings by their length, in ascending order. 
// (Hint: You can use the usort() function to define a custom sorting function.)
function sort_strings_by_length($array) {
    usort($array, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $array;
}

//Example of Usage
$fruits = array("apple", "banana", "kiwi", "orange", "grape");
$sorted_fruits = sort_strings_by_length($fruits);
print_r($sorted_fruits);

echo PHP_EOL;
echo PHP_EOL;

// 2. Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
function concatenate_strings($string1, $string2) {
    $result = $string1 . strrev($string2);
    return $result;
}

//Example of Usage
$str1 = "Hello, ";
$str2 = "world!";
$result = concatenate_strings($str1, $str2);
echo $result;

echo PHP_EOL;
echo PHP_EOL;

// 3. Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
function remove_first_last($array) {
    $length = count($array);
    if ($length <= 2) {
        return array();
    }
    $result = array_slice($array, 1, $length - 2);
    return $result;
}

//Example of Usage
$input = array(1, 2, 3, 4, 5);
$output = remove_first_last($input);
print_r($output);

echo PHP_EOL;
echo PHP_EOL;

// 4. Write a PHP function to check if a string contains only letters and whitespace.
function contains_only_letters_and_whitespace($str) {
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        $char = $str[$i];
        if (!ctype_alpha($char) && $char != ' ') {
            return false;
        }
    }
    return true;
}

//Example of Usage
$str1 = "Hello world";
$str2 = "Hello, world!";
$result1 = contains_only_letters_and_whitespace($str1);
$result2 = contains_only_letters_and_whitespace($str2);
echo $result1 ? "String 1 contains only letters and whitespace\n" : "String 1 contains non-letter characters\n";
echo $result2 ? "String 2 contains only letters and whitespace\n" : "String 2 contains non-letter characters\n";

echo PHP_EOL;
echo PHP_EOL;

// 5. Write a PHP function to find the second largest number in an array of numbers.
function find_second_largest($numbers) {
    $max1 = null;
    $max2 = null;
    foreach ($numbers as $number) {
        if ($max1 === null || $number > $max1) {
            $max2 = $max1;
            $max1 = $number;
        } elseif ($max2 === null || $number > $max2) {
            $max2 = $number;
        }
    }
    return $max2;
}

//Example of Usage
$numbers = array(1, 5, 2, 9, 4, 7);
$second_largest = find_second_largest($numbers);
echo "The second largest number is: " . $second_largest;

