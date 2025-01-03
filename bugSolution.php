function foo(array &$arr) {
  foreach ($arr as $key => &$value) {
    if ($value === null) {
      $value = null; //Set the reference to null
    }
  }
}

$arr2 = [1, 2, &$ref = null, 4, 5, 6];
foo($arr2);
print_r($arr2); // Output: Array ( [0] => 1 [1] => 2 [2] =>  [3] => 4 [4] => 5 [5] => 6 )
//The reference is now NULL

// Alternative solution using a copy to avoid altering the original array by reference
function foo2(array $arr) {
    $arr2 = $arr; //Create a copy
    foreach ($arr2 as $key => $value) {
        if ($value === null) {
            unset($arr2[$key]);
        }
    }
    return $arr2; //Return the modified copy
}

$arr3 = [1,2,&$ref = null, 4,5,6];
$result = foo2($arr3);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 [4] => 5 [5] => 6 )
print_r($arr3); // Original array remains unchanged
