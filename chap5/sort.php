<?php
$data = ['Tennis', 'Swimming', 'Soccer', 'Baseball'];
sort($data, SORT_STRING);
print_r($data); // 結果：Array([0]=>Baseball [1]=>Soccer [2]=>Swimming [3]=>Tennis)
rsort($data, SORT_STRING);
print_r($data); // 結果：Array([0]=>Tennis [1]=>Swimming [2]=>Soccer [3]=>Baseball)
$data2 = ['Tennis' => 1, 'Swimming' => 1, 'Soccer' => 11 , 'Baseball' => 9];
sort($data2, SORT_NUMERIC);
print_r($data2); // 結果：Array([0]=>1 [1]=>1 [2]=>9 [3]=>11)
$data3 = ['Tennis' => 1, 'Swimming' => 1, 'Soccer' => 11 , 'Baseball' => 9];
asort($data3, SORT_NUMERIC);
print_r($data3); // 結果：Array([Tennis]=>1 [Swimming]=>1 [Baseball]=>9 [Soccer]=>11)
ksort($data3, SORT_STRING);
print_r($data3); // 結果：Array([Baseball] => 9 [Soccer] => 11 [Swimming] => 1 [Tennis] => 1)
