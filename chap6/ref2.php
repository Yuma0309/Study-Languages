<?php
function increment(int &$num): int {
    $num++;
    return $num;
}

$value = 10;
print increment($value); // 結果：11
print $value;            // 結果：11
