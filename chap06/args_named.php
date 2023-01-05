<?php
function getTriangleArea(float $base = 5, float $height = 1): float {
    return $base * $height / 2;
}

print getTriangleArea(height: 10);           // 結果：25（前方の引数だけを省略）
print getTriangleArea(height: 10, base: 50); // 結果：250（引数の順番を入れ替えた）
