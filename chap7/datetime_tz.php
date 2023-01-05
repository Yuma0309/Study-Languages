<?php
$dt1 = new DateTime(null, new DateTimeZone('Asia/Ulan_Bator'));
print $dt1->format('Y年m月d日 H時i分'); // 結果：2021年05月01日 15時37分（結果は、実行した日時によって異なります。）
$dt2 = new DateTime(null, new DateTimeZone('America/Virgin'));
print $dt2->format('Y年m月d日 H時i分'); // 結果：2021年05月01日 03時37分（結果は、実行した日時によって異なります。）
$dt3 = new DateTime(null, new DateTimeZone('Europe/London'));
print $dt3->format('Y年m月d日 H時i分'); // 結果：2021年05月01日 08時37分（結果は、実行した日時によって異なります。）
