<?php
//Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

function evenOddChecker(int $number) {
    if ($number % 2 === 0) {
        return "$number is an even number.";
    } else {
        return "$number is an odd number.";
    }
}

$number = 7;
echo evenOddChecker($number);


//1+2+3...…….100  Write a loop to calculate the summation of the series

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "The summation of the series 1 + 2 + 3 + ... + 100 is: $sum";
