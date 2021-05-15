#Array Sum
Question p4 - Submission file: php-q4.php

Array Sum

The function prependSum should return the sum of all elements in the array and, additionally, prepend that sum to the original array. Currently the function returns the correct sum; however the original array is not being modified. Fix the bug.

For example, calling prependSum with the array {1, 2, 3} should return 6, and modify the array to contain {6, 1, 2, 3}.

<?

function sumF($arr) {
    $arr2 = [];
    $sum = 0;
    $sum =  array_sum($arr);
    array_push($arr2, $sum, ...$arr);
    print_r($arr2) . "<br>";
  }
  
  echo sumF([1, 2, 3]);


