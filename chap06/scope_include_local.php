<?php
function checkScope(): string {
    require_once 'scope_included.php';
    return $scope;
}

print checkScope(); // 結果：アクセスできました。
print $scope;       // 結果：カラ（表示されない）
