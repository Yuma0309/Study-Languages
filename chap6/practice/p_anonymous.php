<?php
$data = [3, 7, 9];
$result = array_map(function($v) {
  return sqrt($v);
}, $data);
// $result = array_map(fn($v) => sqrt($v), $data);
print_r($result); // 結果：Array([0] => 1.7320508075689 [1] => 2.6457513110646 [2] => 3)
