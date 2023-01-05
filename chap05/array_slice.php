<?php
$data = ['高江', '青木', '片渕', '和田', '花田', '佐藤'];
print_r(array_slice($data, 2, 3));       // Array([0]=>片渕 [1]=>和田 [2]=>花田)
print_r(array_slice($data, 2, 3, true)); // Array([2]=>片渕 [3]=>和田 [4]=>花田)
print_r(array_slice($data, 4));          // Array([0]=>花田 [1]=>佐藤)
print_r(array_slice($data, -4, -3));     // Array([0]=>片渕)
