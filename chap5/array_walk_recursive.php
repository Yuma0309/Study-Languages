<?php
$sum = 0; // 合計値
$count = 0; //要素の個数
$data = [5, 1, [10, -3]];

// 配列内の要素を順に加算＆カウント
array_walk_recursive($data,
    function($value) use(&$sum, &$count) {
        $sum += $value;
        $count++;
    }
);

$average = $sum / $count;
print "要素の個数：{$count}"; // 結果：4
print "合計値：{$sum}";      // 結果：13
print "平均値：{$average}";  // 結果：3.25
