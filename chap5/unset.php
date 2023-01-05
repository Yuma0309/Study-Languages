<?php
$str;
var_dump($str); // 結果：NULL
$str = '代入';
var_dump($str); // 結果：string(6) "代入"
unset($str);
var_dump($str); // 結果：NULL
