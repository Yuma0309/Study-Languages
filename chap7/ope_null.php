<?php
$dt = null;
print $dt?->format('Y年m月d日 g:i:s');
 // 結果：なにも表示されない（$dtがnullでもエラーにはならない！）
