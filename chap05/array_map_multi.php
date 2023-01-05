<?php
$data = [1, 3, 5, 6];
$data2 = [2, 7, 10];

$result = array_map(
    function($v1, $v2) { return $v1 * $v2; }, $data, $data2);
print_r($result); // 結果：Array ( [0] => 2 [1] => 21 [2] => 50 [3] => 0 )
