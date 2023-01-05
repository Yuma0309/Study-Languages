<?php
$today = '2021-05-14';
$result = preg_split('|([/.\-])|', $today, -1, PREG_SPLIT_DELIM_CAPTURE);
print_r($result); // 結果：Array([0]=>2021 [1]=>- [2]=>05 [3]=>- [4]=>14)