<?php
$dt = new DateTime();
print $dt->format('Y年m月d日') . '<br />'; // 結果：2022年09月29日（結果は、実行した日時によって異なります。）
// 「t」は最終日
print $dt->format('Y年m月t日') . '<br />'; // 結果：2022年09月30日（結果は、実行した日時によって異なります。）
// 1か月10日後を算出
$dt->add(new DateInterval('P1M10D'));
print $dt->format('Y年m月d日'); // 結果：2022年11月08日（結果は、実行した日時によって異なります。）
