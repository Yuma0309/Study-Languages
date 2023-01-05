<?php
$str = 'ただいまWINGSプロジェクトメンバー募集中！';
preg_match('/[\p{Hiragana}]+/u', $str, $data);
preg_match('/[\p{Katakana}ー]+/u', $str, $data2);
preg_match('/[\p{Han}]+/u', $str, $data3);

print $data[0]; // 結果：ただいま
print $data2[0]; // 結果：プロジェクトメンバー
print $data3[0]; // 結果：募集中
