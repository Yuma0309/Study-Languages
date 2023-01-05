<?php
$x = 10;

function checkScope(): int {
    global $x;
    unset($x);
    return ++$x;
}

print checkScope(); // 結果：1
print $x;           // 結果：10
