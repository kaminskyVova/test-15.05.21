#Filter
Queston p3 - Submission file: php-q3.php

Filter

Write a function that removes all items that are not integers from the array. The function should modify the existing array, not create a new one.

For example, if the input array contains values [1, ‘a’, ‘b’, 2], after processing, the array will

contain only values [1, 2].

1<?

function filterF($arr) {
    foreach($arr as &$item) {
        $item = preg_replace('/\D/', '', $item);
    }
    
    print_r($arr);
}

echo filterF([1, "a", "b", 2]);