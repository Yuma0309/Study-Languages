<?php
// 詳細はリスト6.35を参照
function myArrayWalk(array $array, callable $func) : void {
    foreach ($array as $key => $value) {
        $func($value, $key);
    }
}

$result = 0;           // 結果値を格納するためのグローバル変数
function total(mixed $value, int | string $key) : void {
    global $result;    // グローバル変数を定義
    $result += $value; // 配列の値を$resultに加算
}

$data = [100, 50, 10, 5];
myArrayWalk($data, 'total');
print "合計値：{$result}"; // 結果：合計値：165
