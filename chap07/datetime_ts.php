<?php
$now = new DateTime();
$now->setTimestamp(time());
print $now->format('Y年m月d日 H:i:s'); // 結果：2021年05月01日 16:38:23（結果は、実行した日時によって異なります。）
