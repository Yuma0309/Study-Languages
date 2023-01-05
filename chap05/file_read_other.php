<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>アクセスログ</title>
<!--Bootstrapを有効化-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>
<body>
<table class="table">
<thead>
<tr>
    <th>アクセス日時</th><th>スクリプト名</th>
    <th>ユーザーエージェント</th><th>リンク元のURL</th>
</tr>
</thead>
<tbody>
<?php
// ファイルを読み取り専用でオープン
$file = fopen('access.log', 'r');
// ファイルを共有ロック
flock($file, LOCK_SH);
// 行単位でテキストを読み込み＆タブ文字で分割
while ($fline = fgets($file, 1024)) {
    $line = explode("\t", trim($fline));
    print '<tr>';
    // 分割した結果を順に出力
    foreach ($line as $value) {
        print '<td>' . $value . '</td>';
    }
    print '</tr>';
}
// ロックの解除
flock($file, LOCK_UN);

// ファイルをクローズ
fclose($file);
?>
</tbody>
</table>
</body>
</html>
