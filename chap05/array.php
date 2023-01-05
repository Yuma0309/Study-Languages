<?php
$data = ['高江', '青木', '片渕'];
print array_push($data, '山田', '土井'); // 結果：5 (要素数)
print_r($data); // 結果：Array([0]=>高江 [1]=>青木 [2]=>片渕 [3]=>山田 [4]=>土井)
print array_pop($data); // 結果：土井
print_r($data); // 結果：Array([0]=>高江 [1]=>青木 [2]=>片渕 [3]=>山田)
print array_shift($data); // 結果：高江
print_r($data); // 結果：Array([0]=>青木 [1]=>片渕 [2]=>山田)
print array_unshift($data, '掛谷', '横塚', '上垣'); // 結果：6 (要素数)
print_r($data); // 結果：Array([0]=>掛谷 [1]=>横塚 [2]=>上垣 [3]=>青木 [4]=>片渕 [5]=>山田)
