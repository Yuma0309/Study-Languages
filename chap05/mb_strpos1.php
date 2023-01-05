<?php
$str = 'にわにはにわにわとりがいる';
print mb_strpos($str, 'にわ');      // 結果：0
print mb_strpos($str, 'にわ', 2);   // 結果：4
print mb_strpos($str, 'にわ', -10); // 結果：4
print mb_strpos($str, 'かに');      // 結果：false（表示されない）
print mb_strrpos($str, 'にわ');     // 結果：6
print mb_strrpos($str, 'にわ', -8); // 結果：4
