function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === null) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = [1, 2, null, 4, null, 6];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 [5] => 6 )

// Unexpected behavior with references:
$arr2 = [1, 2, &$ref = null, 4, 5, 6];
foo($arr2);
print_r($arr2); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 [4] => 5 [5] => 6 ) //Notice that the reference is gone and NOT NULL
