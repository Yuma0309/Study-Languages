<?php
function total(float $init, float ...$args): float {
    if (count($args) ===0) {
        throw new Exception('引数は1個以上指定してください');
    }
    // 結果を格納するための変数$result
    $result = $init;
    // 取得した引数を順に加算処理
    foreach ($args as $arg) {
        $result += $arg;
    }
    return $result;
}

print total(7, 3, 10);      // 結果：20
print total(11, -5, 4, 88); // 結果：98
