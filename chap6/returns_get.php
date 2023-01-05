<?php
require_once 'returns.php';

$result = max_min(10, 2, -5, 3, 78);
print_r($result);                  // 結果：Array ( [0] => 78 [1] => -5)
[$max, $min] = max_min(10, 2, -5, 3, 78);
print "最大値：{max}、最小値：{$min}"; // 結果：最大値：78、最小値：-5
