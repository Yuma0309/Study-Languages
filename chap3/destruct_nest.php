<pre>
<?php
$data = [1, 2, [31, 32, 33]];

[$a, $b, $c] = $data;
print_r($a); // 結果：1
print_r($b); // 結果：2
print_r($c); // 結果：Array ( [0] => 31 [1] => 32 [2] => 33 )

[$x, $y, [$z1, $z2, $z3]] = $data;
print $x; // 結果：1
print $y; // 結果：2
print $z1; // 結果：31
print $z2; // 結果：32
print $z3; // 結果：33