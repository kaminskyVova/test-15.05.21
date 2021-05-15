#Filter
Question p2 - Submission file: php-q2.php

Unique Numbers

Write a function that finds, efficiently with respect to time used, all numbers that occur exactly once in the input array.

For example, findUniqueNumbers({1, 2 ,3}) should return [2, 3].

<?

function filterF($arr) {

    $arr2 = array_unique($arr);

print_r($arr2);
}

echo filterF([1, 2, 3, 1, 2, 6]);
