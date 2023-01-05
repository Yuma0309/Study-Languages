<?php
$data = ['フレンチブルドック', 'ヨークシャーテリア', 'ダックスフント', 'ポメラニアン', 'コーギー'];
$result = array_filter($data, function($v) {
    return mb_strlen($v) < 8;
});
print_r($result); // 結果：Array ( [2] => ダックスフント [3] => ポメラニアン [4] => コーギー　)