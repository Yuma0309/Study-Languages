<?php
$data = ['PHP', 'JavaScript', 'PHP', 'Java', 'C#', '15'];
$data2 = ['X' => 10, 'Y' => 20, 'Z' => 30];
var_dump(array_search('JavaScript', $data)); // 結果：int(1)
var_dump(array_search('PHP', $data));        // 結果：int(0)
var_dump(array_search('JAVA', $data));       // 結果：bool(false)
var_dump(array_search(15, $data));           // 結果：int(5)
var_dump(array_search(15, $data, true));     // 結果：bool(false)
var_dump(array_search(10, $data2));          // 結果：string(1) "X"
