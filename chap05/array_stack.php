<?php
$data = [];
array_push($data, 10);
array_push($data, 15);
array_push($data, 30);
print_r($data);          // 結果：Array ( [0] => 10 [1] => 15 [2] => 30 )
print(array_pop($data)); // 結果：30
print_r($data);          // 結果：Array ( [0] => 10 [1] => 15 )
