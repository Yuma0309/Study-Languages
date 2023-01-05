<?php
$str = 'WINGSプロジェクト';


print mb_substr($str, 5, 2);  // 結果：プロ（5文字目から2文字を取得）
print mb_substr($str, 5);     // 結果：プロジェクト（5文字目以降を取得）
print mb_substr($str, 5, -4); // 結果：プロ（5文字目以降で、末尾4文字をカットしたものを取得）
print mb_substr($str, -6, 2); // 結果：プロ（後方6文字目から2文字を取得）
