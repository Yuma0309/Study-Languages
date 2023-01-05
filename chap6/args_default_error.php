<?php
// 後ろに必須の引数がある！
function getTriangleArea(float $base = 5, float $height): float {
    return $base * $height / 2;
}

$area = getTriangleArea(10);
