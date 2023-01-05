<?php
$data = ['ぱんだ', 'うさぎ', 'こあら'];
$data2 = ['panda', 'rabbit', 'koala'];

print_r(array_map(null, $data, $data2));
 // 結果：Array ( [0] => Array ( [0] => ぱんだ [1] => panda) [1] => Array ( [0] => うさぎ [1] => rabbit ) [2] => Array ( [0] => こあら [1] => koala ) )
