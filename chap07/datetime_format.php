<?php
$now = new DateTime();
print $now->format('Y年m月d日 (D) g:i:s a'); // 結果：2021年05月01日 (Sat) 4:38:48 pm（結果は、実行した日時によって異なります。）
print $now->format('当月の日数：t日'); // 結果：当月の日数：31日（結果は、実行した日時によって異なります。）
print $now->format('L') ? '閏年です' : '閏年ではありません'; // 結果：閏年ではありません（結果は、実行した日時によって異なります。）
print $now->format(DateTime::RSS); // 結果：Sat, 01 May 2021 16:38:48 +0900（結果は、実行した日時によって異なります。）
