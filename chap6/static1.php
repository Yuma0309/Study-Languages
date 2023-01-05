<?php
function checkStatic(): int {
    $x = 0;
    return ++$x;
}

print checkStatic(); // 結果：1
print checkStatic(); // 結果：1
