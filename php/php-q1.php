Question p1 - Submission file: php-q1.php

Implement the unieq_names function.

When passed two array of names, it will return an array containing the names that appear in

either or both arrays.

The returned array should have no duplicates.

For example: calling unique_names([‘Dan’,’Ron’,’Boris], [‘Boris’,’Dan’, Ruth’]) should return: [‘Dan’,’Ron’,’Boris,’Ruth’] in any order.

<?

function matrix($arr) {

    $arr2 = [];

    foreach ($arr as $key => $array) {
        foreach ($array as $value) {
            echo $value . " ";
            // push_array($arr2, ...new Set($value));
        }
    };
    // echo $arr2;

}

echo matrix([["Dan", "Ron", "Boris"], ["Boris", "Dan", "Ruth"]]);


// I didn't solve the test to the desired result by PHP ... solved it in js

//////////////////////////////
<!-- const matrixArr = [
    ["Dan", "Ron", "Boris"],
    ["Boris", "Dan", "Ruth"],
];

function matrixF(arr) {
    let arr = [];

    for (let i = 0; i < matrixArr.length; i++) {
        let c = matrixArr[i]
        for (let k = 0; k < matrixArr[i].length; k++) {
            arr.push(c[k])
        }
    }
    
    const result = [...new Set(arr)]
    console.log("result: ", result);
}
matrixF(matrixArr); -->