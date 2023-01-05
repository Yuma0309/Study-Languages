<?php
// カレンダをテキスト表示するcalendar関数（引数$yearは年、$monthは月）
function calendar(int $year, int $month) : void {
    // 1〜31までの間でループ処理
    for ($i = 1; $i < 32; $i++) {
        // 日付 ($i) が該当月の妥当な日である場合のみ表示
        if (checkdate($month, $i, $year)) { print "{$i} &nbsp;"; }
    }
}
print '2024年2月のカレンダ：<br />';
calendar(2024, 2);
