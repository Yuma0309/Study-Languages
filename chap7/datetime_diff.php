<?php
$dt1 = new DateTime('2021/5/15 10:58:31');
$dt2 = new DateTime('2021/12/04');
$interval = $dt1->diff($dt2, true);
print $interval->format('%Y年%M月%d日 %H時間%I分%S秒'); // 結果：00年06月18日 13時間01分29秒
