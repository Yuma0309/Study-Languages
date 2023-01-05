<?php
$x = 15;
$y = 38;
[$y, $x] = [$x, $y];
print $x; // 結果：38
print $y; // 結果：15